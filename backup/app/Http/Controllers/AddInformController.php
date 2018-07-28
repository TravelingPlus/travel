<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddInform as Repo;
class AddInformController extends Controller
{
    public function create()
    {
        return view('site.add');
    }

    public function store(Request $request)
    {
        //dd($request);
        $add = new Repo();
        $add->fill($request->all());
        $add->save();
    }
 }
