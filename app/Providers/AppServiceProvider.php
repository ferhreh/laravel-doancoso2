<?php

namespace App\Providers;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    // Đảm bảo chỉ chia sẻ biến nếu người dùng đã đăng nhập
    view()->composer('*', function ($view) {
        if (Auth::check()) {
            $user = Auth::user();
            $cart = Cart::where('user_id', $user->id)->first();

            $cartItems = $cart ? $cart->cartItems()->with('product')->get() : collect([]);
            $view->with('cartItems', $cartItems);
        } else {
            // Truyền một mảng rỗng khi chưa đăng nhập
            $view->with('cartItems', collect([]));
        }
    });
}
}
