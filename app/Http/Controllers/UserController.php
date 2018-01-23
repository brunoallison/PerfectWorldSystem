<?php

namespace App\Http\Controllers;


use App\Http\Requests\User\UserCreateRequest;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /** @var */
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('site.index');
    }

    public function login()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'passwd' => $request->passwd])) {
            return redirect()->route('welcome');
        }

        flash('Login ou senha incorretos ou inexistentes.')->error();
        return redirect()->route('login');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserCreateRequest $request)
    {
        $ultimoId = $this->repository->pegarUltimoIdCadastrado() + 16;
        $request->request->add(['ID' => $ultimoId,
            'creatime' => Carbon::now(),
            'passwd' => criptografa($request->name, $request->passwd),
            'passwd2' => criptografa($request->name, $request->passwd),
            'actived' => 0]);
        $result = $this->repository->create($request->all());
        flash('Usuário cadastrado com sucesso. Confirme sua conta pelo e-mail.')->success();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
