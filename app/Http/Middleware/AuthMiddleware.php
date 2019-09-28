<?php

namespace App\Http\Middleware;

/* Auth使いたい時はuse Illuminate\Support\Facades\Auth;で */
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // 認証してない状態だとtodoに飛べないようにする
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if (Auth::check()) {
            return $response;
        }

        return redirect('/login');
    }
}
