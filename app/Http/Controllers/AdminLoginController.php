<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin;

class AdminLoginController extends Controller{

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $data = Admin::where('username', $username)->get();

        if ($data && $data->isNotEmpty() && $username === $data->first()->username && $password === $data->first()->password) {
            return redirect('/test');
        }else{
            return redirect()->back();
        }
    }
}