<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function download()
    {
        return view('site.download');
    }

    public function infos()
    {
        return view('site.infos');
    }

    public function rank()
    {
        return view('site.rank');
    }

    public function staff()
    {
        return view('site.staff');
    }
}
