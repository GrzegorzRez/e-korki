<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function resource(){
        return $this->belongsTo('App\Resource','resource_id');
    }
}
