<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'description' ,'location', 'email', 'password','phone'
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

    public function sharedResources()
    {
        return $this->belongsToMany('App\Resource', 'resource_user', 'user_id', 'resource_id');
    }

    public function getCountOfOffers(){
        return count(Offer::findFromAuthForUser($this));
    }

    public function getCountOfOpinions(){
        return count(Opinion::findFromNotAuthForUser($this));
    }

    public function getAverageScope(){
        return Opinion::averageGradeForUser($this);
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
