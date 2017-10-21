<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
    	'send_id', 'receive_id', 'content'
    ];

    public function scopeFindForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('send_id',$user->id)->orWhere('receive_id',$user->id)->latest()->get();
        }
    }
}
