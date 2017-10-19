<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['title','content'];

    public function attachments(){
        return $this->hasMany('App\Attachment');
    }
}
