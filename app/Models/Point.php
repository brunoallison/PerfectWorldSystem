<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'uid',
        'aid',
        'time',
        'zoneid',
        'zonelocalid',
        'accountstart',
        'lastlogin',
        'enddate'
    ];

    protected $hidden = [

    ];
}
