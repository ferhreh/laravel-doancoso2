<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\KhachHang;
use App\Models\KhachDaMua;
class BanHangController extends Controller
{
    public function search(Request $request){
    $query = $request->get('query');
    $products = DB::table('nuoc_hoa')
        ->where('name', 'LIKE', "%{$query}%")
        ->orWhere('thuongHieu', 'LIKE', "%{$query}%")
        ->get();
        $products->transform(function ($product) {
            $product->formattedPrice = number_format($product->giaTienLon, 0, ',', '.'); // Thêm giá định dạng
            return $product;
        });
    if ($products->isEmpty()) {
        Log::info('No products found for query: ' . $query);
    } else {
        Log::info('Products found: ' . $products->toJson());
    }


    return response()->json($products);
    }
    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'email' => 'required|email|unique:khach_hang,email',
            'ngaySinh' => 'nullable|date',
            'phoneNumber' => 'required|string|max:15',
        ]);

        // Lưu vào cơ sở dữ liệu
        $customer = new KhachHang();
        $customer->name = $validated['name'];
        $customer->diaChi = $validated['address'];
        $customer->email = $validated['email'];
        $customer->ngaySinh = $validated['ngaySinh'];
        $customer->phoneNumber = $validated['phoneNumber'];
        $customer->save();

        return response()->json(['message' => 'Khách hàng đã được lưu thành công!'], 200);
    }
    public function search_kh(Request $request)
{
    $query = $request->get('query');

    // Tìm kiếm khách hàng theo tên
    $customers = DB::table('khach_hang')
        ->select('id', 'name', 'diaChi', 'email', 'ngaySinh', 'phoneNumber')
        ->where('name', 'LIKE', '%' . $query . '%')
        ->get();

    return response()->json($customers);
}
public function saveOrder(Request $request)
{
    // Validate input data
    $validated = $request->validate([
        'khachHangID' => 'required|exists:khach_hang,id',
        'name' => 'required|string',
        'ghiChu' => 'nullable|string',
        'hinhThuc' => 'nullable|string',
        'tongTien' => 'required|numeric',
    ]);

    // Create a new record in 'khach_da_mua' table
    $order = new KhachDaMua();
    $order->khachHangID = $validated['khachHangID'];
    $order->name = $validated['name'];
    $order->ghiChu = $validated['ghiChu'];
    $order->hinhThuc = $validated['hinhThuc'];
    $order->tongTien = $validated['tongTien'];
    $order->save();

    // Return response (redirect to a page, show success message, etc.)
    return redirect()->route('admin.ban-hang')->with('success', 'Đơn hàng đã được lưu.');
}
}
