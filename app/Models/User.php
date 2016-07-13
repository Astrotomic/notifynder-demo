<?php

namespace App\Models;

use Fenos\Notifynder\Traits\Notifable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifable;

    protected $fillable = [
        'name',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
