<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'receive_id', 'content'
    ];

    public function send(){
        return $this->belongsTo('App\User','send_id');
    }
    public function receive(){
        return $this->belongsTo('App\User','receive_id');
    }

    public function scopeFindForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('send_id',$user->id)->orWhere('receive_id',$user->id)->latest()->get();
        }
    }

    public function scopeFindForAuthLatestSendMessage($query){
        return $query->where('send_id', Auth::id())->latest()->get()->groupBy('receive_id');
    }

    public function scopeFindForAuthLatestReceiveMessage($query){
        return $query->where('receive_id', Auth::id())->latest()->get()->groupBy('send_id');
    }

    public function scopeFindForAuthWithUser($query, User $receive_user)
    {
        if( isset($receive_user) ) {
            return $query->where('send_id', $receive_user->id)->where('receive_id', Auth::id())
                ->orWhere(function ($query) use ($receive_user) {
                    $query->where('receive_id', $receive_user->id)->where('send_id', Auth::id());
                })->latest()->get();
        }
    }
}
