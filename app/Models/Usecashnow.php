<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Usecashnow.
 *
 * @package namespace App\Entities;
 */
class Usecashnow extends Model implements Transformable
{
    use TransformableTrait;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
