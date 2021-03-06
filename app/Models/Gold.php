<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Gold.
 *
 * @package namespace App\Entities;
 */
class Gold extends Model implements Transformable
{
    use TransformableTrait;
    protected $connection = "mysql";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade',
        'preco'
    ];

}
