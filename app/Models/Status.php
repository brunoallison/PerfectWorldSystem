<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Status.
 *
 * @package namespace App\Entities;
 */
class Status extends Model implements Transformable
{
    use TransformableTrait;
    protected $connection = "mysql_game";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];

}
