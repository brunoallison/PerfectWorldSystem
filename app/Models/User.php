<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Authenticatable implements Transformable
{
    use Notifiable;

    use TransformableTrait;

    protected $table = 'users';

    /**
     * @description Caminho que retorna quando realizar o logout
     * @var string
     */
    protected $redirectAfterLogout = '/login';

    /**
     * The attributes that are mass assignable.
     *
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
        'passwd2'
    ];

    protected $hidden = [
        'passwd',
        'passwd2'
    ];
}
