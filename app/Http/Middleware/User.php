<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (auth()->check() AND auth()->user()->actived == 1) {
            return $next($request);
        }elseif(auth()->check() AND auth()->user()->actived == 0){
            flash()->warning('Vocẽ precisa confirmar sua conta pelo e-mail cadastrado.');
            return redirect()->action('AuthUserController@login');
        }
        flash()->error('Faça o login para acessar essa página.');
        return redirect()->action('AuthUserController@login');
    }
}
