<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->middleware('user');
        $this->repository = $repository;
    }

    public function index()
    {
        echo "dljaslkdjsalkd";
        exit;
    }
}
