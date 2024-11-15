<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class AuthController extends Controller
{
    //
    public function showRegisterForm()
    {
        return view('register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
            try {
                $request->validate([
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8|confirmed',
                ]);
        
                User::create([
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'tinh_trang' => 1,
                ]);
        
                return redirect()->route('login')->with('success', 'Đăng ký thành công. Vui lòng đăng nhập.');
            } catch (\Exception $e) {
                error_log($e->getMessage());
                return redirect()->back()->with('error', 'Đã xảy ra lỗi khi đăng ký. Vui lòng thử lại.');
            }
    }

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('tinh_trang', 1)->first();

        if ($user && Auth::attempt($request->only('email', 'password'))) {
            Session::put('user_name', $user->name);
            $emailName = explode('@', Auth::user()->email)[0];
            // Lưu tên vào session
            session(['user_display_name' => $emailName]);
                    // Kiểm tra role của người dùng
            if ($user->role == 1) {
                return redirect()->route('admin.index');
            }

            return redirect()->route('form');
        }

        return back()->withErrors([
            'login_error' => 'Thông tin đăng nhập không chính xác hoặc tài khoản đã bị vô hiệu.',
        ]);
    }

    // Đăng xuất
    public function showLogout()
    {
        $user = Auth::user(); // Lấy thông tin người dùng đang đăng nhập
        return view('logout', compact('user'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('form');
    }


    public function updateAccountInfo(Request $request)
    {
        $request->validate([
            'your-name' => 'required|string|max:255',
            'your-birthday' => 'nullable|date_format:Y-m-d',
            'your-phone' => 'required|string|regex:/^[0-9]{10}$/',
        ]);
    
        $userId = Auth::id(); // Lấy ID của người dùng hiện tại
    
        // Sử dụng câu lệnh raw SQL
        DB::statement('UPDATE users SET birthDay = ?, phoneNumber = ?, name = ? WHERE id = ?', [
            $request->input('your-birthday'),
            $request->input('your-phone'),
            $request->input('your-name'),
            $userId,
        ]);
    
        return redirect()->back()->with('success', 'Thông tin đã được cập nhật thành công.');
    } 
    public function showEmailForm()
{
    return view('forgot-pass');
}

// Gửi mã xác thực đến email
public function sendResetCode(Request $request)
{
    // Xác thực thông tin đầu vào
    $request->validate([
        'register_email' => 'required|email|exists:users,email',
    ]);

    // Tạo mã xác thực ngẫu nhiên
    $code = rand(100000, 999999);
    // Lưu mã xác thực vào session
    $request->session()->put('reset_code', $code);
    $request->session()->put('email', $request->register_email);
        Mail::send('email', compact('code'),function ($email)  use ($request) {
            $email->to($request->register_email)
            ->subject('Mã xác thực đặt lại mật khẩu');
        });
        Log::info('Mã xác thực đã được gửi tới email: ' . $request->register_email);
    return redirect()->route('reset-password')->with('success', 'Mã xác thực đã được gửi tới email của bạn.');
}

// Hiển thị form nhập mã xác thực và mật khẩu mới
public function showResetForm()
{
    return view('reset-password');
}

// Xác minh mã và đặt lại mật khẩu
public function resetPassword(Request $request)
{
    // Xác thực thông tin đầu vào
    $request->validate([
        'reset_code' => 'required',
        'password' => 'required|min:8|confirmed',
    ]);

    // Kiểm tra mã xác thực
    if ($request->reset_code != session('reset_code') || $request->email != session('email')) {
        return back()->withErrors(['reset_code' => 'Mã xác thực không đúng.']);
    }

    // Cập nhật mật khẩu mới cho người dùng
    $user = User::where('email', session('email'))->first();
    
    if($user) { // Kiểm tra nếu người dùng tồn tại
        $user->password = Hash::make($request->password);
        $user->save();

        // Xóa mã xác thực khỏi session
        $request->session()->forget(['reset_code', 'email']);

        return redirect()->route('login')->with('success', 'Mật khẩu của bạn đã được cập nhật thành công.');
    }

    return back()->withErrors(['email' => 'Có lỗi xảy ra, vui lòng thử lại.']);
}

    
}
