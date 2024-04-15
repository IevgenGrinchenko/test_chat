<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * @param Request $request
     */
    public function actionChatPage(Request $request)
    {
        return view('chat');
    }
}
