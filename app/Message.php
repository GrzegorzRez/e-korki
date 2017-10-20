<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
    	'send_id', 'recieve_id', 'content'
    ];
}
