<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthUser\AuthUserCreateRequest;
use App\Http\Requests\AuthUser\AuthUserLoginRequest;
use App\Repositories\UserRepository;
use App\Repositories\UserWebRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    /** @var UserRepository  */
    protected $repository;

    /** @var UserWebRepository  */
    protected $userWebRepository;

    /**
     * AuthUserController constructor.
     * @param UserRepository $repository
     * @param UserWebRepository $userWebRepository
     */
    public function __construct(UserRepository $repository, UserWebRepository $userWebRepository)
    {
        $this->repository = $repository;
        $this->userWebRepository = $userWebRepository;
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['login' => $request->login, 'senha' => $request->senha])) {
            return redirect()->route('user.index');
        }

        flash('Login ou senha incorretos ou inexistentes.')->error();
        return redirect()->back();
    }

    public function create()
    {
        return view('authUser.create');
    }

    public function store(AuthUserCreateRequest $request)
    {
        $request->request->add(['token' => base64_encode(Carbon::now() . $request->login . $request->senha),
            'senha' => criptografa($request->login,$request->senha)]);
        $this->userWebRepository->create($request->all());
        flash('Usuário cadastrado com sucesso. Confirme sua conta pelo e-mail.')->success();
        return redirect()->back();
    }

    public function storeGame(Request $request)
    {
        $ultimoId = $this->repository->pegarUltimoIdCadastrado() + 16;
        $request->request->add(['ID' => $ultimoId,
            'truename' => $request->firstname . ' ' . $request->lastname,
            'creatime' => Carbon::now(),
            'passwd' => criptografa($request->name, $request->passwd),
            'passwd2' => criptografa($request->name, $request->passwd),
            'idnumber' => request()->ip(),
            'mobilenumber' => '0',
            'province' => '0',
            'city' => '0',
            'phonenumber' => '0',
            'address' => '0',
            'postalcode' => '0',
            'adm' => '0']);
        $this->repository->create($request->all());
        flash('Usuário cadastrado com sucesso. Confirme sua conta pelo e-mail.')->success();
        return redirect()->back();
    }


    public function index()
    {
        return view('site.index');
    }

    public function login()
    {
        return view('login.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
