<?php

namespace App\Auth;

use App\Models\UserWeb;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;


class CustomUserProvider implements UserProvider
{
    /**
     * @param mixed $identifier
     * @return null
     */
    public function retrieveById($identifier)
    {
        $qry = UserWeb::where('id', '=', $identifier);

        if (count($qry) > 0) {
            $user = $qry->select('id', 'login', 'senha', 'nome', 'sobrenome', 'token', 'admin', 'sexo', 'avatar', 'gold', 'actived')->first();
            $attributes = array(
                'id' => $user->is,
                'login' => $user->login,
                'senha' => $user->senha,
                'nome' => $user->nome,
                'sobrenome' => $user->sobrenome,
                'token' => $user->token,
                'admin' => $user->admin,
                'sexo' => $user->sexo,
                'avatar' => $user->avatar,
                'gold' => $user->user,
                'actived' => $user->actived
            );
            return $user;
        }
        return null;
    }

    public function retrieveByToken($identifier, $token)
    {
        exit;
    }

    /**
     * @param Authenticatable $user
     * @param string $token
     */
    public function updateRememberToken(Authenticatable $user, $token)
    {
        $user->setRememberToken($token);
        $user->save();
    }

    /**
     * @param array $credentials
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function retrieveByCredentials(array $credentials)
    {


        $query = UserWeb::query()->where('login', $credentials['login']);

        if (count($query) > 0) {
            $user = $query->select('id', 'login', 'senha', 'nome', 'sobrenome', 'token', 'admin', 'sexo', 'avatar', 'gold', 'actived')->first();

            return $user;
        }
        return null;
    }

    /**
     * @param Authenticatable $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = base64_encode(md5($credentials['login'] . $credentials['senha'], true));

        if ($credentials['login'] == $user->login && $plain == $user->senha) {

            $user->save();

            return true;
        }

        return false;
    }
}