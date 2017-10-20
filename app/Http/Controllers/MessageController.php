<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function send(Request $request){
    	$message = new Message($request->all());
    	$message->send_id = Auth::id();
    	$message->receive_id = $request->has('receive_id');
    	$message->content = $request->has('content');
    	$message->save();

    	return redirect(route(''));
    }

    	

    public function show(){
        $messages = Message::findForUser(Auth::user());

    	return view('messages.messageslist')->with('messages',$messages);
    }
}
