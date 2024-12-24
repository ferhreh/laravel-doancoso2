<?php
namespace App\Http\Controllers;

use App\Models\NuocHoa;
use App\Models\DanhGia;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
                $thuongHieu = Arr::flatten((array) $request->thuongHieu); // Làm phẳng mảng
                $query->whereIn('thuongHieu', $thuongHieu);
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
            $hotProducts = DB::table('don_hang')
            ->select('tenDonHang', DB::raw('SUM(soLuong) as total_quantity'), 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào select
            ->groupBy('tenDonHang', 'image', 'order_id', 'thuongHieu') // Thêm thuongHieu vào groupBy
            ->orderBy('total_quantity', 'desc')
            ->limit(7)
            ->get();
            $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
            $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
            $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
            return view('perfumes', compact('perfumes', 'brands','nameProduct', 'genders', 'concentrations', 'volumes', 'minPrice', 'maxPrice','hotProducts','nongDoList','dungTichList','gioiTinhList'));
    }
    public function show($id)
    {
        $nuocHoa = NuocHoa::with('moTa')->findOrFail($id);

        if ($nuocHoa->moTa->isEmpty()) {
            // Thêm logic xử lý nếu không có mô tả
        }
        $danhGia = DanhGia::where('nuoc_hoa_id', $id)
        ->with('user') // Eager loading để lấy thông tin user
        ->orderBy('created_at', 'desc') // Sắp xếp theo thời gian mới nhất
        ->get();
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
        // san pham tuong tu
        $similarProducts = NuocHoa::where('id', '!=', $id) // Exclude current product
        ->where(function ($query) use ($nuocHoa) {
            $query->where('thuongHieu', $nuocHoa->thuongHieu)
                ->orWhere('gioiTinh', $nuocHoa->gioiTinh)
                ->orWhere('nongDo', $nuocHoa->nongDo);
        })
        ->take(7)
        ->get();
        $nongDoList = NuocHoa::select('nongDo')->distinct()->get();
        $dungTichList = NuocHoa::select('dungTich')->distinct()->get();
        $gioiTinhList = NuocHoa::select('gioiTinh')->distinct()->get();
        return view('product.detail', compact('nuocHoa','brands','danhGia','similarProducts','nongDoList','dungTichList','gioiTinhList'));
    }
    public function search(Request $request)
    {
        $query = $request->input('search');

        $products = DB::table('nuoc_hoa')
            ->when($query, function ($q) use ($query) {
                return $q->where('name', 'like', "%{$query}%");
            })
            ->get();
                // Tạo đường dẫn chi tiết sản phẩm
    $products->each(function ($product) {
        $product->link = route('product.detail', ['id' => $product->id]);
    });
        return response()->json($products);
    }
    
}

