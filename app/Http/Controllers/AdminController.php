<?php

namespace App\Http\Controllers;

use App\View\Components\Navbar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {   
        return view('pages/admin_chatroom');
    }
}
