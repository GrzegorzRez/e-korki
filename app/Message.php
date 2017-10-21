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

    public function scopeFindForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('send_id',$user->id)->orWhere('receive_id',$user->id)->latest()->get();
        }
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
