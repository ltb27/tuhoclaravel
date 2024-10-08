<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::id() == null) {
            return redirect()->route('auth.login')->with('error', 'Bạn cần phải đăng nhập để sử dụng chức năng này');
        }

        return $next($request);
    }
}
