<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = ['0' => [  'first_name' => 'Ivan',
            'second_name' => 'Ivanov',
            'city' => 'Kharkiv',
        ],
            '1' => [  'first_name' => 'Anton',
                'second_name' => 'Antonov',
                'city' => 'Lviv',
            ]
        ];
        return view('pages.users',compact('users'));
    }

    public function create()
    {
        return view('pages.create');
    }

   // public function store(Request $request)
    //{
    //    return
    //}
}
