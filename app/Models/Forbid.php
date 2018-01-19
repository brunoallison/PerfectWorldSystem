<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forbid extends Model
{
    protected $fillable = [
        'userid',
        'type',
        'ctime',
        'forbid_time',
        'reason',
        'gmroleid'
    ];

    protected $hidden = [

    ];
}
