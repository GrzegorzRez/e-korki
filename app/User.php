<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'description' ,'location', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function opinions(){
        return $this->hasMany('App\Opinion');
    }

    public function resources(){
        return $this->hasMany('App\Resource');
    }

    public function getFullName(){
        return $this->name.' '.$this->surname;
    }

    public function getAvatarHref(){
        return '/uploads/avatars/'.$this->avatar;
    }

    public function getProfileHref(){
        return route('profile.show',['id'=>$this->id]);
    }
}
