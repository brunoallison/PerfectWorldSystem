<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User
 * @package App\Models
 */
class User extends Authenticatable implements Transformable
{
    use TransformableTrait,Notifiable;
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'ID',
        'name',
        'passwd',
        'Prompt',
        'answer',
        'truename',
        'idnumber',
        'email',
        'mobilenumber',
        'province',
        'city',
        'phonenumber',
        'address',
        'postalcode',
        'gender',
        'birthday',
        'creatime',
        'qq',
        'passwd2',
        'adm'
    ];

    protected $hidden = [
        'passwd',
        'passwd2'
    ];

}
