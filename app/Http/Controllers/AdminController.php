<?php

namespace App\Http\Controllers;

use App\View\Components\Navbar;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(int $chatroom)
    {
        // $userData = User::search($searchQuery);
        $userData = User::query()
            ->whereRaw('created_at <> updated_at')
            ->orderBy('updated_at', 'desc')
            ->get();
        if ($chatroom != 0) {
            $messages = Message::where('id_receiver', $chatroom)
                ->orWhere('id_sender', $chatroom)
                ->orderBy('id', 'desc')
                ->get();
            $username = User::where('id_user', $chatroom)
                ->first();
            $data = [
                'user_data' => $userData,
                'messages' => $messages,
                'username' => $username->username,
                'chatroom' => $chatroom
            ];
        } else {
            $data = [
                'user_data' => $userData,
                'chatroom' => $chatroom
            ];
        }
        return view('pages/admin_chatroom', $data);
    }

    public function sendtoUser(int $chatroom, Request $request)
    {
        DB::table('messages')->insert([
            'id_sender' => 'admin',
            'id_receiver' => $chatroom,
            'content' => $request->message,
        ]);
        $user = User::where('id_user', $chatroom)->first();
        $user->touch();
        return redirect("/adminChatroom/$chatroom");
    }

    public function datauser()
    {
        $userData = User::query()
            ->get();
        $data = [
            'userData' => $userData,
            'number' => 1
        ];
        return view('pages/admin_datauser', $data);
    }

    public function datapesan()
    {
        $messages = Message::query()
            ->get();
        $data = [
            'messages' => $messages,
            'number' => 1
        ];
        return view('pages/admin_datapesan', $data);
    }
}
