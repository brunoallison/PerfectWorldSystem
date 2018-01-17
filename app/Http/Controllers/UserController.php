<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'passwd' => $request->passwd])) {
            return redirect()->route('welcome');
        }

        //flash('Login ou senha incorretos ou inexistentes.')->error();
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
