<?php

namespace App\Auth;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Auth;


class CustomUserProvider implements UserProvider
{
    /**
     * @param mixed $identifier
     * @return null
     */
    public function retrieveById($identifier)
    {
        $qry = User::where('ID', '=', $identifier);

        if (count($qry) > 0) {
            $user = $qry->select('ID', 'name', 'passwd', 'Prompt', 'answer', 'truename', 'idnumber', 'email')->first();
            $attributes = array(
                'ID' => $user->ID,
                'name' => $user->name,
                'passwd' => $user->passwd,
                'Prompt' => $user->Prompt,
                'answer' => $user->answer,
                'truename' => $user->truename,
                'idnumber' => $user->idnumber,
                'email' => $user->email
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

        $query = User::query()->where('name', $credentials['name']);

        if (count($query) > 0) {
            $user = $query->select('ID', 'name', 'passwd', 'Prompt', 'answer', 'truename', 'idnumber', 'email')->first();

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
        $plain = base64_encode(md5($credentials['name'] . $credentials['passwd'], true));

        if ($credentials['name'] == $user->name && $plain == $user->passwd) {

            $user->save();

            return true;
        }

        return false;
    }
}