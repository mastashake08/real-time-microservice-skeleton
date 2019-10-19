<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function sendMessage(Request $request){
      event(new \App\Events\NewMessageEvent($request->message));
    }

    //
}
