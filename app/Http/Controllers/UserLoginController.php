<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['message' => 'Username atau Password Salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
