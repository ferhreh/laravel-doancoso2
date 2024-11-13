<?php
// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\NuocHoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        // Kiểm tra người dùng có đăng nhập không
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }

        $user = Auth::user();
        // Lấy sản phẩm từ `NuocHoa`
        $nuocHoa = NuocHoa::find($productId);
        $selectedVolume = $request->input('selectedVolume', $nuocHoa->dungTich); // Default to 'dungTich' if not selected
        $selectedPrice = $request->input('selectedPrice', $nuocHoa->giaTienLon); // Default to 'giaTienLon' if not selected
            // Lấy số lượng từ request, mặc định là 1 nếu không có
        $quantity = $request->input('quantity', 1);
        if (!$nuocHoa) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }
        // Tìm hoặc tạo giỏ hàng cho người dùng
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
        $cartItem = CartItem::where('cart_id', $cart->id)
                            ->where('product_id', $productId)
                            ->where('dungTich', $selectedVolume) // Kiểm tra cả dung tích
                            ->first();

        if ($cartItem) {
            // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng
            $cartItem->quantity += $quantity;
            // Cập nhật lại giá và dung tích nếu cần
            $cartItem->giaTienLon = $selectedPrice;
            $cartItem->dungTich = $selectedVolume;
            $cartItem->save();
        }else {
            // Nếu chưa có, thêm mới vào giỏ hàng với các thông tin cần thiết
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'name' => $nuocHoa->name, // Lưu tên sản phẩm
                'image' => $nuocHoa->image, // Lưu hình ảnh sản phẩm
                'quantity' => $quantity,
                'giaTienLon' => $selectedPrice, // Lưu giá tương ứng
                'giaTienNho' => $nuocHoa->giaTienNho, // Lưu giá nhỏ nếu cần
                'dungTich' => $selectedVolume, // Lưu dung tích đã chọn
                'dungTichNho' => $nuocHoa->dungTichNho, // Lưu dung tích nhỏ
            ]);
        }
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }
    public function update(Request $request, $id)
{
    $cartItem = CartItem::findOrFail($id);
    if ($request->action == 'increase') {
        $cartItem->quantity++;
    } elseif ($request->action == 'decrease' && $cartItem->quantity > 1) {
        $cartItem->quantity--;
    }
    $cartItem->save();

    return redirect()->back()->with('success', 'Cart updated successfully');
}

public function destroy($id)
{
    $cartItem = CartItem::findOrFail($id);
    $cartItem->delete();

    return redirect()->back()->with('success', 'Item removed from cart');
}
}
