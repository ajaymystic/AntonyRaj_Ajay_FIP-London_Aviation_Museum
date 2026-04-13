<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// I use this middleware to protect all admin routes and API endpoints
class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('admin')) {
            // I return JSON for API calls and a redirect for page requests
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}