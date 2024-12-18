<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\NuocHoa;
use App\Models\DonHang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function showIndex() {
        $phongboSanPham = DB::table('nuoc_hoa')
        ->select('gioiTinh', DB::raw('COUNT(*) as count'))
        ->groupBy('gioiTinh')
        ->get();
        $reviews = DB::table('danh_gia')
        ->join('users', 'danh_gia.user_id', '=', 'users.id')
        ->join('nuoc_hoa', 'danh_gia.nuoc_hoa_id', '=', 'nuoc_hoa.id')
        ->select(
            'nuoc_hoa.name as product_name',
            'users.name as user_name',
            'danh_gia.rating',
            'danh_gia.comment',
            'danh_gia.created_at'
        )
        ->orderBy('danh_gia.created_at', 'desc')
        ->get();
        // Chuyển created_at thành Carbon
        $reviews = $reviews->map(function ($review) {
            $review->created_at = Carbon::parse($review->created_at);
            return $review;
        });
        $tongKhachHang = DB::table('users')->count();
        $tongSanPham = DB::table('nuoc_hoa')->count();
        $tongDonHang = DB::table('don_hang')->count();
        $sapHetHang = DB::table('nuoc_hoa')->where('so_luong', '<=', 10)->count(); // Sản phẩm có số lượng <= 10

        return view('admin.index', compact('tongKhachHang', 'tongSanPham', 'tongDonHang', 'sapHetHang','reviews', 'phongboSanPham'));
    }
    public function getChartData()
{
// Ngày hiện tại
$now = Carbon::now();

// Xác định khoảng thời gian 6 tháng gần nhất
$startDate = $now->copy()->subMonths(5)->startOfMonth(); // Bắt đầu từ 6 tháng trước
$endDate = $now->copy()->endOfMonth(); // Đến cuối tháng hiện tại

// Dữ liệu đầu vào (sản phẩm được thêm mới)
$inputData = DB::table('nuoc_hoa')
    ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
    ->whereBetween('created_at', [$startDate, $endDate])
    ->groupBy('month')
    ->pluck('count', 'month')
    ->toArray();

// Doanh thu
$revenueData = DB::table('don_hang')
    ->selectRaw('MONTH(ngayDatHang) as month, SUM(tongTien) as revenue')
    ->whereBetween('ngayDatHang', [$startDate, $endDate])
    ->groupBy('month')
    ->pluck('revenue', 'month')
    ->toArray();
    // Tên tháng tiếng Việt
    $monthNames = [
        1 => 'Tháng 1',
        2 => 'Tháng 2',
        3 => 'Tháng 3',
        4 => 'Tháng 4',
        5 => 'Tháng 5',
        6 => 'Tháng 6',
        7 => 'Tháng 7',
        8 => 'Tháng 8',
        9 => 'Tháng 9',
        10 => 'Tháng 10',
        11 => 'Tháng 11',
        12 => 'Tháng 12',
    ];
// Chuẩn bị dữ liệu cho biểu đồ
$labels = [];
$inputCounts = [];
$revenues = [];

foreach (range(0, 5) as $i) {
    $currentMonth = $now->copy()->subMonths($i)->month; 
    $labels[] = $monthNames[$currentMonth]; // Lấy tên tháng tiếng Việt
    $inputCounts[] = $inputData[$currentMonth] ?? 0; // Lấy số lượng sản phẩm đầu vào
    $revenues[] = $revenueData[$currentMonth] ?? 0;  // Lấy doanh thu
}

// Đảo ngược thứ tự để hiển thị từ tháng cũ đến tháng mới
$labels = array_reverse($labels);
$inputCounts = array_reverse($inputCounts);
$revenues = array_reverse($revenues);

return response()->json([
    'labels' => $labels,
    'inputData' => $inputCounts,
    'revenueData' => $revenues,
]);
}
    public function showAddDonHang() {
        return view('admin.form-add-don-hang');
    }
    public function showAddSanPham() {
        return view('admin.form-add-san-pham');
    }
    public function showCalendar() {
        return view('admin.page-calendar');
    }
    public function showBanHang() {
        return view('admin.phan-mem-ban-hang');
    }
    public function showBaoCao() {
        $tongDoanhThu = DB::table('don_hang')->sum('tongTien'); // Tính tổng toàn bộ cột 'tongTien'
        $tongSanPham = DB::table('nuoc_hoa')->count();
        $tongDonHang = DB::table('don_hang')->count();
        $sapHetHang = DB::table('nuoc_hoa')->where('so_luong', '<=', 10)->count(); 
        $hotProducts = DB::table('don_hang')
            ->join('nuoc_hoa', 'don_hang.order_id', '=', 'nuoc_hoa.id') // Kết hợp với bảng nuoc_hoa
            ->select(
                'don_hang.tenDonHang',
                DB::raw('SUM(don_hang.soLuong) as total_quantity'),
                'don_hang.image',
                'don_hang.order_id',
                'don_hang.thuongHieu',
                'don_hang.tongTien',
                'don_hang.soLuong',
                'nuoc_hoa.giaTienLon', // Lấy giá tiền lớn từ bảng nuoc_hoa
                'nuoc_hoa.tinh_trang' // Lấy tình trạng từ bảng nuoc_hoa
            )
            ->groupBy(
                'don_hang.tenDonHang',
                'don_hang.image',
                'don_hang.order_id',
                'don_hang.thuongHieu',
                'don_hang.tongTien',
                'don_hang.soLuong',
                'nuoc_hoa.giaTienLon',
                'nuoc_hoa.tinh_trang'
            )
            ->orderBy('total_quantity', 'desc')
            ->limit(7)
            ->get();
    
        return view('admin.quan-ly-bao-cao', compact('hotProducts','tongDoanhThu','tongSanPham','tongDonHang','sapHetHang'));
    }
    public function showDataOder() {
        return view('admin.table-data-oder');
    }
    public function showDataProduct() {
            // Lấy danh sách sản phẩm từ cơ sở dữ liệu
    $products = DB::table('nuoc_hoa')->get();

    // Trả về view và truyền dữ liệu sản phẩm
    return view('admin.table-data-product', compact('products'));
    }
    public function AddSanPham(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'thuongHieu' => 'required|string|max:255',
        'moTa' => 'required|string',
        'gioiTinh' => 'required|string|max:255',
        'nongDo' => 'required|string|max:255',
        'dungTich' => 'required|string|max:255',
        'doLuuHuong' => 'required|string|max:255',
        'doToaHuong' => 'required|string|max:255',
        'so_luong' => 'required|integer|min:0',
        'giaTienLon' => 'required|numeric|min:0',
        'giaTienNho' => 'required|numeric|min:0',
        'giaVon'=> 'required|numeric|min:0',
        'giaVonNho'=> 'required|numeric|min:0',
        'dungTichNho' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'tinh_trang' => 'required|boolean',
    ]);
    $imageName = $request->file('image')->getClientOriginalName();
    $nuocHoa = NuocHoa::create([
        'name' => $validatedData['name'],
        'thuongHieu' => $validatedData['thuongHieu'],
        'gioiTinh' => $validatedData['gioiTinh'],
        'nongDo' => $validatedData['nongDo'],
        'dungTich' => $validatedData['dungTich'],
        'doLuuHuong' => $validatedData['doLuuHuong'],
        'doToaHuong' => $validatedData['doToaHuong'],
        'so_luong' => $validatedData['so_luong'],
        'giaTienLon' => $validatedData['giaTienLon'],
        'giaTienNho' => $validatedData['giaTienNho'],
        'giaVon' => $validatedData['giaVon'],
        'giaVonNho' => $validatedData['giaVonNho'],
        'dungTichNho' => $validatedData['dungTichNho'],
        'image' => $imageName, 
        'tinh_trang' => $validatedData['tinh_trang'],
    ]);
    $nuocHoa->moTa()->create([
        'noi_dung' => $validatedData['moTa'],
    ]);

    return redirect()->route('admin.table-data-product')->with('success', 'Thêm sản phẩm thành công!');
}
public function editSanPham($id)
{
    $nuocHoa = NuocHoa::findOrFail($id);
    return view('admin.edit-san-pham', compact('nuocHoa'));
}
public function updateSanPham(Request $request, $id)
{
    // Tìm sản phẩm cần cập nhật
    $nuocHoa = NuocHoa::findOrFail($id);

    // Validate dữ liệu
    $request->validate([
        'thuongHieu' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'gioiTinh' => 'required|string',
        'nongDo' => 'required|string|max:255',
        'dungTich' => 'required|string|max:255',
        'giaTienLon' => 'nullable|numeric|min:0',
        'dungTichNho' => 'required|string|max:255',
        'giaTienNho' => 'nullable|numeric|min:0',
        'doLuuHuong' => 'required|string|max:255',
        'doToaHuong' => 'required|string|max:255',
        'so_luong' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn file ảnh
        'tinh_trang' => 'required|boolean',
    ]);
    // Lấy dữ liệu từ request
    $data = $request->all();
    // Xử lý ảnh mới nếu có
    if ($request->hasFile('image')) {
        // Đường dẫn thư mục lưu trữ ảnh
        $imagePath = public_path('assets/images/all');

        // Xóa ảnh cũ nếu tồn tại
        if ($nuocHoa->image && file_exists($imagePath . '/' . $nuocHoa->image)) {
            unlink($imagePath . '/' . $nuocHoa->image);
        }

        // Sử dụng tên gốc của ảnh
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName(); // Lấy tên gốc của ảnh

        // Di chuyển ảnh vào thư mục `public/images/all`
        $file->move($imagePath, $imageName);

        // Chỉ lưu tên ảnh vào cơ sở dữ liệu
        $data['image'] = $imageName;
    } else {
        // Nếu không tải lên ảnh mới, giữ nguyên ảnh cũ
        $data['image'] = $nuocHoa->image;
    }
    // Cập nhật dữ liệu sản phẩm
    $nuocHoa->update($data);

    // Chuyển hướng về danh sách sản phẩm kèm thông báo
    return redirect()->route('admin.table-data-product')->with('success', 'Sản phẩm đã được cập nhật thành công!');
}
    // Xóa sản phẩm
    public function deleteSanPham($id)
    {
        $nuocHoa = NuocHoa::findOrFail($id);
        $nuocHoa->delete();

        return redirect()->route('admin.table-data-product')->with('success', 'Sản phẩm đã được xóa!');
    }

    public function QuanLyKhachHang(Request $request)
    {
        $query = User::query();
    
        // Filter by role if a specific role is selected
        if ($request->filled('role')) {
            $query->where('role', (int)$request->role);
        }
    
        // Apply search filter if provided
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('email', 'like', '%' . $searchTerm . '%')
                      ->orWhere('phoneNumber', 'like', '%' . $searchTerm . '%');
            });
        }
    
        $users = $query->paginate(10);
    
        return view('admin.quan-ly-khach-hang', compact('users'));
    }
    public function editNguoiDung($id)
{
    $user = User::findOrFail($id);
    return view('admin.edit-khach-hang', compact('user'));
}
public function updateNguoiDung(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phoneNumber' => 'nullable|digits_between:10,20',
        'tinh_trang' => 'required|in:0,1',
        'role' => 'required|in:0,1',
        'birthDay' => 'nullable|date',
    ]);

    $user = User::findOrFail($id);
    $user->update($request->only(['name', 'phoneNumber', 'tinh_trang', 'role', 'birthDay']));

    return redirect()->route('admin.quan-ly-khach-hang')->with('success', 'Cập nhật thông tin khách hàng thành công.');
}
public function destroyNguoiDung($id)
{
    // Tìm user cần xóa
    $user = User::findOrFail($id);

    // Thực hiện xóa
    $user->delete();

    // Chuyển hướng về danh sách khách hàng với thông báo thành công
    return redirect()->route('admin.quan-ly-khach-hang')->with('success', 'Xóa khách hàng thành công.');
}
// đơn hàng
public function QuanLyDonHang()
{
    $orders = DonHang::orderBy('ngayDatHang', 'desc')->get();
    return view('admin.table-data-oder', compact('orders'));
}
public function editDonHang($id)
    {
        $order = DonHang::findOrFail($id);
        return view('admin.orders-edit', compact('order'));
    }

    // Xử lý cập nhật đơn hàng
    public function updateDonHang(Request $request, $id)
    {
        $order = DonHang::findOrFail($id);
        $order->update($request->only([
            'tenKhachHang', 
            'tenDonHang', 
            'hinhThucMua', 
            'trangThai', 
            'ghiChu'
        ]));
        
        return redirect()->route('admin.table-data-oder')->with('success', 'Cập nhật đơn hàng thành công!');
    }

    // Xóa đơn hàng
    public function destroyDonHang($id)
    {
        $order = DonHang::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.table-data-oder')->with('success', 'Xóa đơn hàng thành công!');
    }
    public function getRevenueData(Request $request) {
        $filter = $request->get('filter', 'day'); // Bộ lọc theo 'day', 'month', hoặc 'year'
    
        $query = DB::table('don_hang')
            ->join('nuoc_hoa', 'don_hang.order_id', '=', 'nuoc_hoa.id') // Kết nối bảng
            ->selectRaw("
                CASE 
                    WHEN ? = 'day' THEN DATE(don_hang.ngayDatHang)
                    WHEN ? = 'month' THEN DATE_FORMAT(don_hang.ngayDatHang, '%Y-%m')
                    ELSE YEAR(don_hang.ngayDatHang)
                END AS time_group,
                SUM(don_hang.tongTien) AS total_revenue,
                SUM(
                    CASE 
                        WHEN don_hang.soLuongDungTichNho = 0 THEN don_hang.soLuong * nuoc_hoa.giaVon
                        ELSE don_hang.soLuong * nuoc_hoa.giaVonNho
                    END
                ) AS total_cost, -- Tính tổng chi phí
                SUM(
                    don_hang.tongTien - 
                    CASE 
                        WHEN don_hang.soLuongDungTichNho = 0 THEN don_hang.soLuong * nuoc_hoa.giaVon
                        ELSE don_hang.soLuong * nuoc_hoa.giaVonNho
                    END
                ) AS total_profit -- Tính lợi nhuận
            ", [$filter, $filter])
            ->groupBy('time_group') // Nhóm theo thời gian
            ->orderBy('time_group', 'ASC') // Sắp xếp theo thời gian
            ->get();
    
        return response()->json($query);
    }
    
}
