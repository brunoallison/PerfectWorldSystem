<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User
 * @package App\Models
 */
class User extends Model implements Authenticatable, Transformable
{
    use TransformableTrait;
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

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
