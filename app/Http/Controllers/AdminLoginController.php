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
            return redirect()->back()->withErrors(['error' => 'Admin not found']);
        }
        if ($password !== $data->password) {
            return redirect()->back()->withErrors(['error' => 'Wrong password']);
        }
        $request->session()->put('admin_id', $data->id_admin);
        return redirect('/test');
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
