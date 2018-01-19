<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usecashlog extends Model
{
    protected $fillable = [
        'userid',
        'zoneid',
        'sn',
        'aid',
        'point',
        'cash',
        'status',
        'creatime',
        'fintime'
    ];

    protected $hidden = [

    ];
}
