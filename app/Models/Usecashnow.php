<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usecashnow extends Model
{
    protected $fillable = [
        'userid',
        'zoneid',
        'sn',
        'aid',
        'point',
        'cash',
        'status',
        'creatime'
    ];

    protected $hidden = [

    ];
}
