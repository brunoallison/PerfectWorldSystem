<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class User
 * @package App\Models
 */
class User extends Model implements Authenticatable, Transformable
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

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
        return $this->truename;
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->ID;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
        return $this->passwd;
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
