<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Auth.
 *
 * @package namespace App\Entities;
 */
class Auth extends Model implements Transformable
{
    use TransformableTrait;
    public $timestamps = false;

    protected $connection = "mysql_game";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid',
        'zoneid',
        'rid'
    ];

    protected $hidden = [
        //
    ];

}
