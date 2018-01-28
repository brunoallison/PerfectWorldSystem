<?php

namespace App\Http\Controllers;


use App\Repositories\UserRepository;

class UserController extends Controller
{
    /** @var */
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->middleware('user');
        $this->repository = $repository;
    }

    public function index()
    {
        return view('user.index');
    }

    public function chat()
    {
        return view('user.chat');
    }
}
