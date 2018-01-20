<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Point.
 *
 * @package namespace App\Entities;
 */
class Point extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
