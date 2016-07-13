<?php

namespace App\Models;

use Fenos\Notifynder\Traits\Notifable;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use Notifable;

    protected $fillable = [
        'brand',
        'series',
    ];
}
