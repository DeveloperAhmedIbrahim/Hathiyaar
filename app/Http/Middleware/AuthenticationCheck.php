<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is visiting an admin route:
        if ($request->is('admin/*')) {
            // Must be authenticated and have role=1
            if (!Auth::check() || Auth::user()->role !== 1) {
                return redirect()->route('auth.admin.login')->with('info', 'Your session expired please login again to access dashboard.');;
            }
        } else {
            // Otherwise, treat it as a client route
            // Must be authenticated and have role=2
            if (!Auth::check() || Auth::user()->role !== 2) {
                return redirect()->route('auth.login')->with('info', 'Your session expired please login again to access that page.');;
            }
        }

        return $next($request);
    }
}
