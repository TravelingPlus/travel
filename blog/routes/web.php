<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('start', function () {
    return view('site.start');
});

Route::get('login', function () {
    return view('site.login');
});


//Route::get('admin/login', 'Auth\AdminLoginController@showLoginFrom')->name('admin.login');

//Route::get('admin/login', function () {
//    return view('auth.admin-login');
//});

//Route::prefix('admin')->group(function (){
//Route::get('www', 'Admin@showLoginForm');
    Route::get('admin/login', 'Admin@showLoginForm' )->name('admin.login');
    Route::post('admin/login', 'Admin@login')->name('admin.login.submit');
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
//});


Route::get('help', function () {
    return view('pages.help');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('first/second', function () {
    return view('pages.test');
});
Route::get('inform',['uses' => 'UsersController@index']);

Route::get('users/create',['uses' => 'UsersController@create']);

Route::post('users',['uses' => 'UsersController@store']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/json', 'HomeController@json')->name('json');


Route::get('/check', function () {
    return view('welcome', ['name' => 'Samantha']);
});

Route::resource('/home/add', 'AddInformController');
Route::get('/home/prepareToSave', 'HomeController@prepareToSave');
