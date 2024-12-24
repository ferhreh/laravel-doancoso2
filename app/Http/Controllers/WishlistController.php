<?php 
// app/Http/Controllers/WishlistController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Wishlist; 
use App\Models\NuocHoa; 
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add(Request $request, $productId)
{
    // Kiểm tra người dùng đã đăng nhập chưa
    if (!Auth::check()) {
        return redirect()->back()->with('error', 'Vui lòng đăng nhập để thêm vào yêu thích.');
    }

    $userId = Auth::id();

    // Kiểm tra xem sản phẩm đã có trong danh sách yêu thích chưa
    $existingItem = Wishlist::where('user_id', $userId)->where('product_id', $productId)->first();

    if ($existingItem) {
        return redirect()->back()->with('message', 'Sản phẩm đã có trong danh sách yêu thích của bạn.');
    }

    // Thêm sản phẩm vào danh sách yêu thích
    Wishlist::create([
        'user_id' => $userId,
        'product_id' => $productId,
        'name' => $request->name,
        'image'=> $request->image,
        'giaTienLon' => $request->giaTienLon,
    ]);

    return redirect()->back()->with('message', 'Đã thêm vào danh sách yêu thích.');
}

    public function index()
    {
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        $wishlistItems = Wishlist::where('user_id', Auth::id())->get();
        return view('wishlist', compact('wishlistItems','brands','nongDoList','dungTichList','gioiTinhList'));
    }

    public function remove($productId)
    {
        $userId = Auth::id();
        Wishlist::where('user_id', $userId)->where('product_id', $productId)->delete();
        return redirect()->route('wishlist.index')->with('message', 'Đã xóa sản phẩm khỏi yêu thích.');
    }
}
