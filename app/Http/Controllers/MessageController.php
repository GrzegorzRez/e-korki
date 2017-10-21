<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;
use App\User;

class MessageController extends Controller
{
    public function index(){
        return view('messages.index');
    }

    public function show( $receive_user_id ){
        $receiveUser = User::find($receive_user_id);
        $messages = Message::findForAuthWithUser($receiveUser);
        return view('messages.conversation')->with('receiveUser',$receiveUser)->with('messages',$messages);

    }

    public function store(Request $request){
        $message = new Message($request->all());
        $message->send_id = Auth::id();
        $message->save();
        return redirect(route('conversation',['id'=>$request->receive_id]));
    }
}
