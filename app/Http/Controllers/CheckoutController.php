<?php

namespace App\Http\Controllers;
use App\Models\NuocHoa;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{


public function showCheckout($id) {
    $product = NuocHoa::findOrFail($id);
    return view('checkout', compact('product'));
}

public function processCheckout(Request $request, $id)
{
    // Tìm sản phẩm dựa trên id
    $product = NuocHoa::findOrFail($id);

    // Truyền dữ liệu trực tiếp vào view mà không dùng session
    return view('confirmation', [
        'product' => $product,
        'phone' => $request->input('phone'),
        'payment_method' => $request->input('payment_method'),
        'address' => $request->input('address'),
        'quantity' => $request->input('quantity', 1), // mặc định là 1 nếu không có số lượng
    ]);
}

}
