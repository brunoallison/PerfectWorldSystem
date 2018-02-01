<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User
 * @package App\Models
 */
class User extends Model implements Transformable
{
    use TransformableTrait, Notifiable;
    protected $connection = "mysql_game";
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

    public function setBirthdayAttribute($date)
    {
        $date = Carbon::createFromFormat('d/m/Y', $date);
        $this->attributes['birthday'] = $date->format('Y-m-d');
    }

}
