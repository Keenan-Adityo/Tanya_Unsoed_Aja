<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $data = User::where('username', $username)->first();
        if ($data == null) {
            return redirect()->back()->withErrors(['error' => 'User tidak ditemukan']);
        }
        if ($password !== $data->password) {
            return redirect()->back()->withErrors(['error' => 'Password Salah']);
        }
        $request->session()->put('user_id', $data->id_user);

        return redirect('/chatroom');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        // Clear the session data
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the desired location after logout
        return redirect('/');
    }
}
