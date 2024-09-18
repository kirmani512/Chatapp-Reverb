<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatAppController extends Controller
{
    public function chatroom(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);
        $username = $request->username;
        return view('chatroom', compact('username'));
    }
    public function fireMessage(Request $request)
    {
        MessageSent::dispatch($request->sender,$request->message);
        return $request->all();
    }
}
