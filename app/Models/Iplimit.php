<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iplimit extends Model
{
    protected $fillable = [
        'uid',
        'ipaddr1',
        'ipmask1',
        'ipaddr2',
        'ipmask2',
        'ipaddr3',
        'ipmask3',
        'enable',
        'lockstatus'
    ];

    protected $hidden = [

    ];
}
