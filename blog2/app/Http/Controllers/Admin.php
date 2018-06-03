<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class Admin extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //public function __construct()
    //{
    //    $this->middleware('guest:admin');
    //}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }


    public function login(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return( redirect()->intended(route('admin.dashboard')));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
