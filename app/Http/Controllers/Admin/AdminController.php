<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\NuocHoa;
use App\Models\DonHang;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showIndex() {
        return view('admin.index');
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
        return view('admin.quan-ly-bao-cao');
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
        'gioiTinh' => 'required|string|max:255',
        'nongDo' => 'required|string|max:255',
        'dungTich' => 'required|string|max:255',
        'doLuuHuong' => 'required|string|max:255',
        'doToaHuong' => 'required|string|max:255',
        'so_luong' => 'required|integer|min:0',
        'giaTienLon' => 'required|numeric|min:0',
        'giaTienNho' => 'required|numeric|min:0',
        'dungTichNho' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'tinh_trang' => 'required|boolean',
    ]);
    $imageName = $request->file('image')->getClientOriginalName();
    NuocHoa::create([
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
        'dungTichNho' => $validatedData['dungTichNho'],
        'image' => $imageName, 
        'tinh_trang' => $validatedData['tinh_trang'],
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
}
