<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ChatroomController extends Controller
{
    public function index(Request $request)
    {
        $id = session()->get('user_id');
        $user = User::where('id_user', $id)->first();
        $messages = Message::where('id_receiver', $id)
            ->orWhere('id_sender', $id)
            ->orderBy('id', 'desc')
            ->get();
        $data = [
            'username' => $user->username,
            'messages' => $messages
        ];
        return view('pages/user_chatroom', $data);
    }

    public function settings()
    {
        return view('pages/user_settings');
    }

    public function sendMessage(Request $request)
    {   
        $id = session()->get('user_id');
        DB::table('messages')->insert([
            'id_sender' => $id,
            'id_receiver' => 'admin',
            'content' => $request->message,
        ]);
        $user = User::where('id_user', $id)->first();
        $user->touch();
        return redirect('/chatroom');
    }
}
