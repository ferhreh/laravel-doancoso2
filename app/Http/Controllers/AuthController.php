<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\NuocHoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    //
    public function showRegisterForm()
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('register', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
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
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('login', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
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
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $user = Auth::user(); // Lấy thông tin người dùng đang đăng nhập
        return view('logout', compact('user','brands','nongDoList','dungTichList','gioiTinhList'));
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
    $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
    $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
    $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
    $hotProducts = DB::table('don_hang')
    ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
    ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
    ->orderBy('total_quantity', 'desc')
    ->limit(7)
    ->get();
    $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    return view('forgot-pass', compact('hotProducts','brands','nongDoList','dungTichList','gioiTinhList'));
}

// Gửi mã xác thực đến email
public function sendResetCode(Request $request)
{
    // Xác thực đầu vào
    $validator = Validator::make($request->all(), [
        'register_email' => 'required|email|exists:users,email',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
    // Tạo mã xác thực ngẫu nhiên
    $code = rand(100000, 999999);

    // Lưu mã và email vào session
    $request->session()->put('reset_code', $code);
    $request->session()->put('email', $request->register_email);

    // Gửi email
    try {
        Mail::send('emails.reset-code', ['code' => $code], function ($message) use ($request) {
            $message->to($request->register_email)
                    ->subject('Mã xác thực đặt lại mật khẩu');
        });
    } catch (\Exception $e) {
        Log::error("Lỗi gửi email: " . $e->getMessage());
        return back()->with('error', 'Không thể gửi mã xác thực, vui lòng thử lại sau.');
    }

    Log::info('Mã xác thực đã được gửi tới email: ' . $request->register_email);
    return redirect()->route('reset-password')
                     ->with('success', 'Mã xác thực đã được gửi tới email của bạn.');
}
// Hiển thị form nhập mã xác thực và mật khẩu mới
public function showResetForm()
{
    $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
    $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
    $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
    $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    return view('reset-password',compact('brands','nongDoList','dungTichList','gioiTinhList'));
}
// Xác minh mã và đặt lại mật khẩu
public function resetPassword(Request $request)
{
    
    // Kiểm tra mật khẩu
    $password = $request->password;
    $passwordConfirmation = $request->password_confirmation;

    if (strlen($password) < 8) {
        return redirect()->back()
                         ->with('warning', 'Mật khẩu phải có ít nhất 8 ký tự.');
    }

    if ($password !== $passwordConfirmation) {
        return redirect()->back()
                         ->with('warning', 'Mật khẩu và xác nhận mật khẩu không khớp.');
    }

    // Kiểm tra mã xác thực
    if ($request->reset_code != session('reset_code')) {
        return back()->withErrors(['reset_code' => 'Mã xác thực không đúng.'])
                     ->with('warning', 'Mã xác thực không hợp lệ.');
    }

    // Tìm người dùng qua email trong session
    $user = User::where('email', session('email'))->first();

    if (!$user) {
        return back()->withErrors(['email' => 'Người dùng không tồn tại.'])
                     ->with('warning', 'Không tìm thấy người dùng với email này.');
    }

    // Cập nhật mật khẩu
    $user->password = Hash::make($request->password);
    $user->save();

    // Xóa session
    $request->session()->forget(['reset_code', 'email']);

    return redirect()->route('login')->with('success', 'Mật khẩu của bạn đã được cập nhật thành công.');
}

    
}
