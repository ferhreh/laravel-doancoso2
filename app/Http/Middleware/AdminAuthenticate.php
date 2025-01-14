<?php

namespace App\Http\Middleware;
use App\Http\Controllers\CheckoutController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()&& Auth::user()->role==1){
            return $next($request);
        }
        return redirect()->route('login')->withErrors('Bạn không có quyền truy cập vào trang này.');
    }
}
