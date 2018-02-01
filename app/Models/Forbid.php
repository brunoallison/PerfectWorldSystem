<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Forbid.
 *
 * @package namespace App\Entities;
 */
class Forbid extends Model implements Transformable
{
    use TransformableTrait;
    protected $connection = "mysql_game";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
