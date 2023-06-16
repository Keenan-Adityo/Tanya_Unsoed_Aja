<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->session()->get('admin_id')) {
            return redirect('/');
        }
        return $next($request);
    }
}
