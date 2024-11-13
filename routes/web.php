<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NuocHoaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'form'])->name('form');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/thuong-hieu', [PageController::class, 'brands'])->name('brands');
Route::get('/perfumes', [NuocHoaController::class, 'index'])->name('perfumes');
Route::get('/san-pham/{id}', [NuocHoaController::class, 'show'])->name('product.detail');
Route::get('/tin-tuc', [PageController::class, 'news'])->name('news');
Route::get('/lien-he', [PageController::class, 'contact'])->name('contact');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
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
// thanh toán
Route::get('/checkout/{id}', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
Route::post('/checkout/cart', [CheckoutController::class, 'showCartCheckout'])->name('checkout.cart');
Route::post('/checkout/process/{id}', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('/Confirmation', [CheckoutController::class, 'showConfirmation'])->name('checkout.confirmation');



