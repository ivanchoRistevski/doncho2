<?php

namespace Allutomotive;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne('Allutomotive\Profile','user_id');
    }

    public function posts(){
        return $this->hasMany('Allutomotive\Post', 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
