<?php

namespace App\Http\Controllers;
use App\Models\NuocHoa;
use App\Models\DonHang;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckout(Request $request, $id) {
        // Find the selected product by ID
        $product = NuocHoa::findOrFail($id);
    
        // Retrieve the quantity from the request or set to 1 by default
        $quantity = (int) $request->query('quantity', 1);
    
        // Retrieve the selected price from the request or default to the product's main price
        $selectedPrice = (float) $request->query('selectedPrice', $product->giaTienLon);
    
        // Calculate the total price
        $totalPrice = $selectedPrice * $quantity;
    
        // Pass all necessary data to the checkout view
        return view('checkout', compact('product', 'quantity', 'totalPrice', 'selectedPrice'));
    }
    
    public function showCartCheckout(Request $request){
        $user = auth()->user(); 
        // Retrieve the cart items and calculate the total price
        $cartItems = CartItem::where('cart_id', $user->cart->id)->get();

        // Example: Get the first product from the cart (you can adjust this as needed)
        $product = $cartItems->first()->product; // Assuming CartItem has a relation with Product
        $totalQuantity = $cartItems->sum('quantity');
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->giaTienLon * $item->quantity;
        });
    
        // Render the checkout page with product and total price
        return view('checkoutcart', compact('cartItems', 'totalPrice', 'product','totalQuantity'));
}
public function processCheckout(Request $request, $id)
{
    // Tìm sản phẩm dựa trên id
    $product = NuocHoa::findOrFail($id);
    $quantity = $request->input('so-luong', 1);
    $totalPrice = $request->input('tong-tien');

        // Thêm đơn hàng vào bảng don_hang
        DB::table('don_hang')->insert([
            'user_id' => Auth::id(), 
            'maDonHang' => uniqid('DH'), // Tạo mã đơn hàng tự động
            'hinhThucMua' => $request->input('payment_method'),
            'ngayDatHang' => now(),
            'tongTien' => $totalPrice,
            'trangThai' => 1, // Trạng thái mặc định (1: Mới tạo)
            'ghiChu' => $request->input('notes'),
            'soLuong' => $quantity,
            'tenKhachHang' => $request->input('full_name'),
            'tenDonHang' => $product->name, // Tên sản phẩm
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    // Truyền dữ liệu trực tiếp vào view mà không dùng session
    return view('confirmation', [
        'product' => $product,
        'phone' => $request->input('phone'),
        'payment_method' => $request->input('payment_method'),
        'address' => $request->input('address'),
        'quantity' => $quantity,
        'totalPrice' => $totalPrice, // Số tiền tổng cộng
    ]);
}
public function processCartCheckout(Request $request, $id)
{
    // Tìm sản phẩm và lấy thông tin giỏ hàng
    $product = NuocHoa::findOrFail($id);
    $cartItems = DB::table('cart_items')
    ->join('carts', 'cart_items.cart_id', '=', 'carts.id')
    ->where('carts.user_id', Auth::id())
    ->select('cart_items.*')
    ->get();

    $quantity = $request->input('so-luong', 1);
    $totalPrice = $request->input('tong-tien', 0);
    foreach ($cartItems as $item) {
        DB::table('don_hang')->insert([
            'user_id' => Auth::id(), 
            'maDonHang' => uniqid('DH'), // Tạo mã đơn hàng tự động
            'hinhThucMua' => $request->input('payment_method'),
            'ngayDatHang' => now(),
            'tongTien' => $item->giaTienLon * $item->quantity,
            'trangThai' => 1, // Trạng thái mặc định (1: Mới tạo)
            'ghiChu' => $request->input('notes'),
            'soLuong' => $item->quantity,
            'tenKhachHang' => $request->input('full_name'),
            'tenDonHang' => $item->name, // Tên sản phẩm
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
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
    ]);
}
public function lichSuDonHang()
{
    $user = Auth::user(); // Lấy thông tin người dùng đăng nhập
    $donHangs = DonHang::where('user_id', $user->id)->get();

    return view('lich_su_don_hang', compact('donHangs'));
}
}
