<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhGia;
use App\Models\NuocHoa;
use App\Models\DonHang;
use Illuminate\Support\Facades\DB;
class DanhGiaController extends Controller
{
    public function showForm($donHangId)
    {
        $hotProducts = DB::table('don_hang')
        ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
        ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
        ->orderBy('total_quantity', 'desc')
        ->limit(7)
        ->get();
        $donHang = DonHang::findOrFail($donHangId);
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        return view('danhgia.form', compact('donHang','brands','hotProducts'));
    }

    public function store(Request $request, $donHangId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:10000',
        ]);

        $donHang = DonHang::findOrFail($donHangId);

        $danhGia = new DanhGia();
        $danhGia->user_id = auth()->id(); // Người dùng hiện tại
        $danhGia->don_hang_id = $donHang->id;
        $danhGia->nuoc_hoa_id = $donHang->order_id; // Sản phẩm liên quan
        $danhGia->rating = $request->rating;
        $danhGia->comment = $request->comment;

        if ($request->hasFile('image')) {
            $danhGia->image = $request->file('image')->store('images/danhgia', 'public');
        }

        if ($request->hasFile('video')) {
            $danhGia->video = $request->file('video')->store('videos/danhgia', 'public');
        }

        $danhGia->save();

        // Cập nhật trạng thái đánh giá của đơn hàng
        $donHang->is_reviewed = true;
        $donHang->save();

        return redirect()->route('lich_su_don_hang', $donHang->order_id)
            ->with('success', 'Đánh giá đã được lưu thành công!');
    }
}
