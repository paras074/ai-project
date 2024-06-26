<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return redirect('admin.dashboard'); // Replace '/dashboard' with your desired admin dashboard route
        }

        return $next($request);
    } 
}
