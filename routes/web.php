<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers;
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
    return view('register');
});

Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::get('login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::post('register', 'App\Http\Controllers\AuthController@doRegister')->name('auth.do-register');

Route::get('main', 'App\Http\Controllers\AuthController@show')
    ->name('main');

Route::post('login', 'App\Http\Controllers\AuthController@doLogin')->name('auth.do-login');


Route::get('auth.show/{userId}', 'App\Http\Controllers\AuthController@getPlan')->name('auth.show');

Route::resource('plans', 'App\Http\Controllers\PlanController');

Route::any('/user/{id}', 'App\Http\Controllers\AuthController@destroy');

Route::any('logout', 'App\Http\Controllers\AuthController@logout')->name('auth.logout');