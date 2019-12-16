<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vartotojai extends Authenticatable
{
    use Notifiable;

    protected $table = 'vartotojai';

    /**
     * The attributes that are mass assignable.c
     *
     * @var array
     */
    protected $fillable = [
        'vardas', 'pavarde', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getAuthPassword()
    {
        return $this->password;
    }
}
