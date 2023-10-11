<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/greeting', function () {
    // return view('welcome');
    return view('hello');
})->name('homepage');

Route::get('/about/{name?}', function ($name = 'Guest') {
    // return view('welcome');
    $name =  ucfirst($name);
    return view('about', ['name' => $name]);
});

Route::middleware(['protectedPage'])->name('users.')->group(function () {
    Route::get('/users', 'UserController@index')->name('index');
    Route::get('/users/{id}', 'UserController@show')->name('show');
    Route::get('/login', 'UserController@getLogin')->name('getLogin');
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::post('/login', 'UserController@login')->name('login');
    Route::get('/getUserList', 'UserController@getUserListFromApi')->name('getUserList');
    Route::get('/profile', 'UserController@getProfile')->name('profile');
});

Route::get('/noaccess', function() {
    return view('noaccess');
})->name('noaccess');
