<?php

namespace App\Http\Controllers;
use App\Models\NuocHoa;
use App\Models\CartItem;
use Illuminate\Http\Request;

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
    $totalPrice = $product->giaTienLon * $quantity;

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

}
