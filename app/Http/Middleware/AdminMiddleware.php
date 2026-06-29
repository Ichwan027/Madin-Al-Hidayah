<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Belum login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Bukan Admin
        if (Auth::user()->role != 'Admin') {
            abort(403, 'Anda tidak memiliki hak akses.');
        }

        return $next($request);
    }
}