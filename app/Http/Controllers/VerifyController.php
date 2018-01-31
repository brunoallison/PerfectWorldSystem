<?php

namespace App\Http\Controllers;

use App\Repositories\UserWebRepository;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    /** @var UserWebRepository  */
    protected $repository;

    /**
     * VerifyController constructor.
     * @param UserWebRepository $repository
     */
    public function __construct(UserWebRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify($token)
    {
        $this->repository->findWhere(['token' => $token])->first()->update(['actived' => '1', 'token' => null]);


        flash('Conta verificada con sucesso.')->success();
        return redirect()->route('login');
    }
}
