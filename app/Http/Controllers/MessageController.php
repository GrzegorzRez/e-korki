<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function sendMessage(Request $request){
    	$message = new Message($request->all());
    	$message->send_id = Auth::id();
    	$message->recieve_id = $request->has('recieve_id');
    	$message->content = $request->has('content');
    	$message->save();

    	return redirect(route(''));
    }

    	

    public function showMessages($id){
    	$messages = Message::where('send_id',$id)->orWhere('recieve_id',$id);

    	return view('messages.messageslist')->with('messages',$messages);
    }
}
