<?php
namespace App\Http\Controllers;

use App\Models\NuocHoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NuocHoaController extends Controller
{
    public function index(Request $request)
    {
            // Khởi tạo query
            $query = NuocHoa::query();

            // Áp dụng bộ lọc nếu các checkbox được chọn
            if ($request->has('volumes') && !empty($request->volumes)) {
                $query->whereIn('dungTich', $request->volumes);
            }
            if ($request->has('concentrations') && !empty($request->concentrations)) {
                $query->whereIn('nongDo', $request->concentrations); 
            }
            if ($request->has('thuongHieu') && !empty($request->thuongHieu)) {
                $query->whereIn('thuongHieu', $request->thuongHieu);
            }
            if ($request->has('genders') && !empty($request->genders)) {
                $query->whereIn('gioiTinh', $request->genders);
            }
            $minPrice = $request->input('min_price', 150000); // Mặc định 150,000 nếu không có
            $maxPrice = $request->input('max_price', 81400000); // Mặc định 81,400,000 nếu không có
            $query->whereBetween('giaTienLon', [$minPrice, $maxPrice]);
            // Truy xuất sản phẩm đã lọc hoặc tất cả sản phẩm nếu không có bộ lọc
            $perfumes = $query->get();  
            $perfumes = $query->paginate(15); // 3 hàng x 5 sản phẩm

            // Kiểm tra xem yêu cầu có phải AJAX không
            if ($request->ajax()) {
                $html = view('partials.product_list', compact('perfumes'))->render();
                return response()->json(['html' => $html]);
            }

                        
            // Lấy giá trị riêng biệt cho các bộ lọc từ bảng `nuoc_hoa`
            $brands = NuocHoa::distinct()->pluck('thuongHieu');
            $nameProduct=NuocHoa::distinct()->pluck('name');
            $genders = NuocHoa::distinct()->pluck('gioiTinh');
            $concentrations = NuocHoa::distinct()->pluck('nongDo');
            $volumes = NuocHoa::distinct()->pluck('dungTich');

            return view('perfumes', compact('perfumes', 'brands','nameProduct', 'genders', 'concentrations', 'volumes', 'minPrice', 'maxPrice'));
    }
    public function show($id)
    {
        $nuocHoa = NuocHoa::findOrFail($id);
        return view('product.detail', compact('nuocHoa'));
    }
}

