<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class UserWeb.
 *
 * @package namespace App\Entities;
 */
class UserWeb extends Model implements Authenticatable, Transformable
{
    use TransformableTrait, Notifiable;

    protected $table = "user_webs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_game',
        'login',
        'email',
        'nome',
        'sobrenome',
        'nascimento',
        'sexo',
        'gold',
        'senha',
        'avatar',
        'token',
        'actived',
        'admin'
    ];

    public function setNascimentoAttribute($date)
    {
        $date = Carbon::createFromFormat('d/m/Y', $date);
        $this->attributes['nascimento'] = $date->format('Y-m-d');
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
        return $this->nome . ' ' . $this->sobrenome;
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
        return $this->senha;
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
