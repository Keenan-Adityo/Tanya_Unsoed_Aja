<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSController extends Controller
{
    public function index()
    {
        return view('pages/cs_chatroom');
    }
}
