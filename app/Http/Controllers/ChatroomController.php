<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatroomController extends Controller
{
    public function index()
    {
        return view('pages/user_chatroom');
    }

    public function settings()
    {
        return view('pages/user_settings');
    }
}
