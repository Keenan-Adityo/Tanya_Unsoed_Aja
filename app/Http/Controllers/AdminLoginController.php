<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin;

class AdminLoginController extends Controller
{

    public function index()
    {
        return view("loginAdmin");
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $data = Admin::where('username', $username)->first();
        //dd($data);
        if ($data == null) {
            return redirect()->back()->withErrors(['error' => 'Admin tidak ditemukan']);
        }
        if ($password !== $data->password) {
            return redirect()->back()->withErrors(['error' => 'Password Salah']);
        }
        $request->session()->put('admin_id', $data->id_admin);
        if($data->role == 1) {
            return redirect('/datauser');
        } else {
            return redirect('/customerService/0');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Clear the session data
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the desired location after logout
        return redirect('/loginAdmin');
    }
}
