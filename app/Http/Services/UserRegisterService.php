<?php

namespace App\Http\Services;

use App\Http\Requests\User\UserCreateRequest;
use App\Repositories\UserRepository;

class UserRegisterService
{

    /** @var UserRepository  */
    protected $userRepository;


    /**
     * UserRegisterService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function saveUser(UserCreateRequest $request)
    {
        $resultado = $this->userRepository->pegarUltimoIdCadastrado();
        dd($resultado);
        exit;
        //$id = $this->userRepository
        $user = $this->userRepository->create($request->all());

        return $user;
    }


}