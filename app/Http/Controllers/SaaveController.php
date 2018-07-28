<?php

namespace App\Http\Controllers;

use App\Saave;
use Illuminate\Http\Request;
use App\AddInform as Repo;
class SaaveController extends Controller
{
    public function create()
    {
        return view('site.add1');
    }

    public function store()
    {
        //$add = new Saave();
        //$add->origin='777';
        //$add->save();
        return '111111';
    }
    public function show()
    {}

}
