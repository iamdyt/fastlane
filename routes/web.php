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
    return redirect()->route('all.movies');
});

Route::get('/auth', 'UserController@getAuthPage')->name('user.auth');
Route::get('dashboard', 'UserController@getDashboard')->middleware('loggedin')->name('get.dashboard');
Route::get('movies', 'MovieController@allMovies')->name('all.movies');

// API
Route::post('auth/login', 'UserController@loginUser')->name('login.user');
Route::post('movie/add', 'MovieController@addMovie')->name('add.movie');