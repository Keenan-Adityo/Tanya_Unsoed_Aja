<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->session()->get('user_id')) {
            return redirect('/');
        }
        return $next($request);
    }
}
