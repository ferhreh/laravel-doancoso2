<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NuocHoaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BanHangController;
use App\Http\Controllers\ChinhSachController;
use App\Http\Controllers\DanhGiaController;
use App\Models\NuocHoa;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|danhGia.showForm
*/

Route::get('/', [PageController::class, 'form'])->name('form');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/thuong-hieu', [PageController::class, 'brands'])->name('brands');
Route::get('/perfumes', [NuocHoaController::class, 'index'])->name('perfumes');
Route::get('/san-pham/{id}', [NuocHoaController::class, 'show'])->name('product.detail');
Route::get('/lien-he', [PageController::class, 'contact'])->name('contact');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/logout', [AuthController::class, 'showLogout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/account-info/update', [AuthController::class, 'updateAccountInfo'])->name('account.update');
Route::get('/forgot-password', [AuthController::class, 'showEmailForm'])->name('forgot-pass');
Route::post('/forgot-password', [AuthController::class, 'sendResetCode'])->name('send-reset-code');
Route::get('/reset-password', [AuthController::class, 'showResetForm'])->name('reset-password');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password.submit');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->middleware('auth')->name('cart.add');
Route::put('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/destroy/{productId}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/wishlist/add/{productId}', [WishlistController::class, 'add'])->name('wishlist.add');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::delete('/wishlist/remove/{productId}', [WishlistController::class, 'remove'])->name('wishlist.remove');
// contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// thanh toán
Route::middleware(['web'])->group(function () {
    Route::post('/checkout/{id}', [CheckoutController::class, 'showCheckout'])
    ->name('checkout.show');
    Route::get('/checkout/cart', [CheckoutController::class, 'showCartCheckout'])->name('checkout.cart');
});
// giohang

Route::post('/checkout/process/{id}', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::post('/checkout/processCart/{id}', [CheckoutController::class, 'processCartCheckout'])->name('checkout.processCart');
Route::get('/Confirmation', [CheckoutController::class, 'showConfirmation'])->name('checkout.confirmation');
//login
Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
// tìm kiếm
Route::middleware(['web'])->group(function () {
    Route::get('/search', [NuocHoaController::class, 'search'])->name('search');
});
//lich su don hang
Route::get('/lich-su-don-hang', [CheckoutController::class, 'lichSuDonHang'])
    ->middleware('auth')
    ->name('lich_su_don_hang');
// Chính sách
Route::get('/chinh-sach/kiem-hang', [ChinhSachController::class, 'KiemHang'])->name('kiemHang');
Route::get('/chinh-sach/bao-mat', [ChinhSachController::class, 'baoMat'])->name('baoMat');
Route::get('/chinh-sach/van-chuyen', [ChinhSachController::class, 'vanChuyen'])->name('vanChuyen');
Route::get('/chinh-sach/khieu-nai', [ChinhSachController::class, 'khieuNai'])->name('khieuNai');
Route::get('/chinh-sach/thanh-Toan', [ChinhSachController::class, 'thanhToan'])->name('thanhToan');
Route::get('/chinh-sach/bao-hanh', [ChinhSachController::class, 'baoHanh'])->name('baoHanh');
// admin
Route::prefix('admin')->middleware('admin')->group(function(){
   //banhang
   Route::get('/search-products', [BanHangController::class, 'search'])->name('products.search');
   Route::post('/customers', [BanHangController::class, 'store']);
   Route::get('customers/search', [BanHangController::class, 'search_kh']);
   Route::post('/order/save', [BanHangController::class, 'saveOrder'])->name('order.save');
    Route::get('/index', [AdminController::class, 'showIndex'])->name('admin.index');
    Route::get('/don-hang', [AdminController::class, 'showAddDonHang'])->name('admin.form-add-don-hang');
    Route::get('/add-san-pham', [AdminController::class, 'showAddSanPham'])->name('admin.form-add-san-pham');
    Route::post('/ban-hang', [AdminController::class, 'banHang'])->name('admin.ban-hang');
    Route::post('/add-san-pham', [AdminController::class, 'AddSanPham'])->name('admin.add-san-pham');
    Route::get('/edit-san-pham/{id}', [AdminController::class, 'editSanPham'])->name('admin.edit-san-pham');
    Route::post('/update-san-pham/{id}', [AdminController::class, 'updateSanPham'])->name('admin.update-san-pham');
    Route::delete('/delete-san-pham/{id}', [AdminController::class, 'deleteSanPham'])->name('admin.delete-san-pham');
    Route::get('/calendar', [AdminController::class, 'showCalendar'])->name('admin.page-calendar');
    Route::get('/ban-hang', [AdminController::class, 'showBanHang'])->name('admin.phan-mem-ban-hang');
    Route::get('/bao-cao', [AdminController::class, 'showBaoCao'])->name('admin.quan-ly-bao-cao');
    Route::get('/oder', [AdminController::class, 'QuanLyDonHang'])->name('admin.table-data-oder');
    Route::get('/orders/{id}/edit', [AdminController::class, 'editDonHang'])->name('admin.orders.edit');
    Route::post('/orders/{id}/update', [AdminController::class, 'updateDonHang'])->name('admin.orders.update');
    Route::post('/orders/{id}/delete', [AdminController::class, 'destroyDonHang'])->name('admin.orders.delete');
    Route::get('/menu', [AdminController::class, 'showDataProduct'])->name('admin.table-data-product');
    Route::get('/khach-hang', [AdminController::class, 'QuanLyKhachHang'])->name('admin.quan-ly-khach-hang');
    Route::get('/admin/khach-hang/{id}/edit', [AdminController::class, 'editNguoiDung'])->name('admin.edit-khach-hang');
    Route::put('/admin/khach-hang/{id}', [AdminController::class, 'updateNguoiDung'])->name('admin.update-khach-hang');
    Route::delete('/admin/khach-hang/{id}', [AdminController::class, 'destroyNguoiDung'])->name('admin.destroy-khach-hang');
 
});
    //bao cao doanh thu
    Route::get('/admin/revenue', [AdminController::class, 'getRevenueData'])->name('admin.revenue');
    Route::get('/chart-data', [AdminController::class, 'getChartData']);
    Route::get('/product-distribution', [AdminController::class, 'showIndex']);
// loc thuong hieu
Route::get('/thuong-hieu/{letter?}', function ($letter = null) {
    if ($letter && $letter !== 'All') {
        $brands = NuocHoa::where('thuongHieu', 'LIKE', $letter . '%')->distinct()->get();
    } else {
        $brands = NuocHoa::select('thuongHieu')->distinct()->get();
    }
    return response()->json($brands);
})->name('thuongHieu.filter');
// danh gia


Route::get('don-hang/{id}/danh-gia', [DanhGiaController::class, 'showForm'])->name('danhGia.showForm');
Route::post('don-hang/{id}/danh-gia', [DanhGiaController::class, 'store'])->name('danhGia.store');
use App\Http\Controllers\EventController;
Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events', [EventController::class, 'getEvents']);

