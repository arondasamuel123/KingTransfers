<?php

namespace App;

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
        'name', 'email','password'
    ];

    /*
     * The attibutes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

     

    public function transfers(){
        return $this->hasMany(Transfer::class)->latest()->limit(1);
    }

   


    

}
