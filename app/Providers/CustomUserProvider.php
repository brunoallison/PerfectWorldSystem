<?php

namespace App\Auth;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;


class CustomUserProvider implements UserProvider
{
    public function retrieveById($identifier)
    {
        exit;
    }

    public function retrieveByToken($identifier, $token)
    {
        exit;
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        exit;
    }

    public function retrieveByCredentials(array $credentials)
    {

        if (empty($credentials)) {
            return;
        }

        $query = User::query()->where('name', $credentials['name'])->first();

        return $query;
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = base64_encode(md5($credentials['name'].$credentials['passwd'], true));

        if ($credentials['name'] == $user->name && $plain == $user->passwd) {
            return true;
        }
        return false;
    }
}