<?php

namespace App\Http\Services;

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
    private function saveUser(array $data)
    {
        dd($data);
        $user = $this->userRepository->create($data);

        return $user;
    }


}