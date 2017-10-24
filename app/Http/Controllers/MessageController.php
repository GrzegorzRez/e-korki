<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;
use Illuminate\Support\Facades\Auth;
use App\User;

class MessageController extends Controller
{
    public function index(){
        return redirect(route('messages.receive'));
    }

    public function receive(){
        $latestReceiveMessages = Message::findForAuthLatestReceiveMessage();
        return view('messages.receive')->with('latestReceiveMessages',$latestReceiveMessages);
    }

    public function send(){
        $latestSendMessages = Message::findForAuthLatestSendMessage();
        return view('messages.send')->with('latestSendMessages',$latestSendMessages);
    }

    public function show( $receive_user_id ){
        $receiveUser = User::find($receive_user_id);
        $messages = Message::findForAuthWithUser($receiveUser);
        $resources = Auth::user()->resources;
        return view('messages.conversation')->with('receiveUser',$receiveUser)->with('messages',$messages)->with('resources',$resources);
    }

    public function store(MessageRequest $request){
        $message = new Message($request->all());
        $message->send_id = Auth::id();
        $message->save();
        return redirect(route('messages.conversation',['receive_user_id'=>$request->receive_id]));
    }
}
