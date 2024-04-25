<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show chats
     *
     */
    public function index()
    {
        return view('chat', ['user' => Auth::user()]);
    }

    /**
     * Fetch all messages
     *
     */
    public function fetchMessages()
    {
        return Message::with('user')->orderByDesc('created_at')->get();
    }

    /**
     * Persist message to database
     *
     * @param Request $request
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}