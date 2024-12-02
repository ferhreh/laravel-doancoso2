<?php

namespace App\Http\Controllers;
use App\Models\NuocHoa;
use App\Models\DonHang;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class CheckoutController extends Controller
{
    public function showCheckout(Request $request, $id) {
        if (!auth()->check()) {
            return redirect()->route('login')->with('warning', 'Bạn cần đăng nhập trước khi mua hàng.');
        }
        // Lấy thông tin sản phẩm
    $product = NuocHoa::findOrFail($id);
    $hotProducts = DB::table('don_hang')
    ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
    ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
    ->orderBy('total_quantity', 'desc')
    ->limit(7)
    ->get();
    $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    // Lấy số lượng và giá trị từ form POST
    $quantity = (int) $request->input('quantity', 1);
    $selectedPrice = (float) $request->input('selectedPrice', $product->giaTienLon);

    // Tính tổng giá
    $totalPrice = $selectedPrice * $quantity;

        return view('checkout', compact('product', 'quantity', 'totalPrice', 'selectedPrice','hotProducts','brands'));
    }
    
    public function showCartCheckout(Request $request){
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $user = auth()->user(); 
        $cartItems = CartItem::where('cart_id', $user->cart->id)->get();
        $product = $cartItems->first()->product; 
        $totalQuantity = $cartItems->sum('quantity');
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->giaTienLon * $item->quantity;
        });
        
        return view('checkoutcart', compact('cartItems', 'totalPrice', 'product','totalQuantity','hotProducts','brands'));
}
public function processCheckout(Request $request, $id)
{
    $hotProducts = DB::table('don_hang')
    ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
    ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
    ->orderBy('total_quantity', 'desc')
    ->limit(7)
    ->get();
    $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    // Tìm sản phẩm dựa trên id
    $product = NuocHoa::findOrFail($id);
    $quantity = $request->input('so-luong', 1);
    $totalPrice = $request->input('tong-tien');
    DB::table('don_hang')->insert([
        'user_id' => Auth::id(), 
        'order_id' => $product->id,
        'maDonHang' => uniqid('DH'), // Tạo mã đơn hàng tự động
        'hinhThucMua' => $request->input('payment_method'),
        'ngayDatHang' => now(),
        'tongTien' => $totalPrice,
        'trangThai' => 1, // Trạng thái mặc định (1: Mới tạo)
        'ghiChu' => $request->input('notes'),
        'soLuong' => $quantity,
        'tenKhachHang' => $request->input('full_name'),
        'thuongHieu'=>$product->thuongHieu,
        'tenDonHang' => $product->name, // Tên sản phẩm
        'created_at' => now(),
        'updated_at' => now(),
        'image'=> $product->image,
        'diaChi'=>$request->input('address'),
    ]);
    $thu_nghiem=0;
    $orderData = [
        'user_id' => Auth::id(),
        'order_id' => $product->id,
        'maDonHang' => $this->generateOrderCode(), // Hàm tạo mã đơn hàng
        'hinhThucMua' =>$request->input('payment_method'),
        'ngayDatHang' => now(),
        'tongTien' => $totalPrice,
        'trangThai' => 1, // Mới tạo
        'ghiChu' => $request->input('notes', ''), // Ghi chú tùy chọn
        'soLuong' => $quantity,
        'tenKhachHang' => $request->input('full_name'),
        'thuongHieu' => $product->thuongHieu,
        'tenDonHang' => $product->name,
        'created_at' => now(),
        'updated_at' => now(),
        'image' => $product->image,
        'diaChi'=>$request->input('address'),
    ];
    // Gửi email xác nhận (tùy chọn)
    Mail::to(Auth::user()->email)->send(new OrderConfirmation($orderData,$thu_nghiem));
    // Thêm đơn hàng vào bảng don_hang
 
    // Truyền dữ liệu trực tiếp vào view mà không dùng session
    return view('confirmation', [
        'product' => $product,
        'phone' => $request->input('phone'),
        'payment_method' => $request->input('payment_method'),
        'address' => $request->input('address'),
        'quantity' => $quantity,
        'totalPrice' => $totalPrice, // Số tiền tổng cộng
        'processCheckout' => true, // Đánh dấu đây là processCheckout
    ],compact('hotProducts','brands','totalPrice'));
}
public function processCartCheckout(Request $request, $id)
{
    $hotProducts = DB::table('don_hang')
    ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
    ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
    ->orderBy('total_quantity', 'desc')
    ->limit(7)
    ->get();
    $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    // Tìm sản phẩm và lấy thông tin giỏ hàng
    $product = NuocHoa::findOrFail($id);
    $cartItems = DB::table('cart_items')
    ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
    ->where('carts.user_id', Auth::id())
    ->select('cart_items.*')
    ->get();
    $thu_nghiem=1;
    $quantity = $request->input('so-luong', 1);
    $totalPrice = $request->input('tong-tien', 0);
    foreach ($cartItems as $item) {
        DB::table('don_hang')->insert([
            'user_id' => Auth::id(), 
            'order_id' => $product->id,
            'maDonHang' => uniqid('DH'), // Tạo mã đơn hàng tự động
            'hinhThucMua' => $request->input('payment_method'),
            'ngayDatHang' => now(),
            'tongTien' => $totalPrice,
            'trangThai' => 1, // Trạng thái mặc định (1: Mới tạo)
            'ghiChu' => $request->input('notes'),
            'soLuong' => $quantity,
            'tenKhachHang' => $request->input('full_name'),
            'thuongHieu'=>$product->thuongHieu,
            'tenDonHang' => $product->name, // Tên sản phẩm
            'created_at' => now(),
            'updated_at' => now(),
            'image'=> $product->image,
            'diaChi'=>$request->input('address'),
        ]);
    }
    $orderData = [
        'user_id' => Auth::id(),
        'order_id' => $product->id,
        'maDonHang' => $this->generateOrderCode(), // Hàm tạo mã đơn hàng
        'hinhThucMua' =>$request->input('payment_method'),
        'ngayDatHang' => now(),
        'tongTien' => $totalPrice,
        'trangThai' => 1, // Mới tạo
        'ghiChu' => $request->input('notes', ''), // Ghi chú tùy chọn
        'soLuong' => $quantity,
        'tenKhachHang' => $request->input('full_name'),
        'thuongHieu' => $product->thuongHieu,
        'tenDonHang' => $product->name,
        'created_at' => now(),
        'updated_at' => now(),
        'image' => $product->image,
        'diaChi'=>$request->input('address'),
    ];
    // Gửi email xác nhận (tùy chọn)
    Mail::to(Auth::user()->email)->send(new OrderConfirmation($orderData,$thu_nghiem));
  DB::table('cart_items')
  ->where('cart_id', auth()->id())
  ->delete();  
    // Truyền dữ liệu vào view xác nhận
    return view('confirmation', [
        'product' => $product,
        'cartItems' => $cartItems,
        'phone' => $request->input('phone'),
        'payment_method' => $request->input('payment_method'),
        'address' => $request->input('address'),
        'quantity' => $quantity,
        'totalPrice' => $totalPrice,
        'processCartCheckout' => true, // Đánh dấu đây là processCartCheckout
    ],compact('hotProducts','brands','totalPrice','thu_nghiem'));
}
public function lichSuDonHang()
{
    $user = Auth::user(); // Lấy thông tin người dùng đăng nhập
    $donHangs = DonHang::where('user_id', $user->id)->get();
    $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    return view('lich_su_don_hang', compact('donHangs','brands'));
}
// Hàm tạo mã đơn hàng
private function generateOrderCode()
{
    return uniqid('DH');
}
}
