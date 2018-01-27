<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function chat()
    {
        return view('user.chat');
    }

    public function send(request $request)
    {
        $user = User::find(auth()->user()->getAuthIdentifier())->toArray();
        $this->saveToSession($request);
        event(new ChatEvent($request->message,$user['name']));
    }

    public function saveToSession($request)
    {
        session()->put('chat', $request->message);
    }
    
    /*public function send()
    {
        $message = "Hello Pusher";
        $user = User::find(auth()->user()->getAuthIdentifier())->toArray();
        event(new ChatEvent($message, $user['truename']));
    }*/
}
