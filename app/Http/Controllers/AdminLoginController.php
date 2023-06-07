<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Retrieve the admin from the database
        $admin = Admin::where('username', $username)->first();

        // Check if the admin exists and verify the password
        if ($admin && Hash::check($password, $admin->password)) {
            // Authentication passed
            return redirect()->intended('/admin/dashboard');
        }

        // Authentication failed
        return redirect()->back()->withInput()->withErrors(['message' => 'Invalid credentials']);
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/loginAdmin');
    }
}