<?php

namespace App\Models;

use Fenos\Notifynder\Notifable;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use Notifable;

    protected $fillable = [
        'brand',
        'series',
    ];
}
