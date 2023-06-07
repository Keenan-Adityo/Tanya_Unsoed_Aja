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

        // Retrieve the admin from the database
        $user = User::where('username', $username)->first();

        // Check if the user exists and verify the password
        if ($user && Hash::check($password, $user->password)) {
            // Authentication passed
            return redirect()->intended('/test');
        }

        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['message' => 'Username/Password Salah']);
    }


    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        return redirect('/login');
    }
}
