<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Iplimit.
 *
 * @package namespace App\Entities;
 */
class Iplimit extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
