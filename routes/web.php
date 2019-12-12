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
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/register', 'LoginController@register')->name('login.register');
Route::post('/register', 'LoginController@store');

Route::get('/user/load', 'LoginController@allload');
Route::get('/user/load/{id}', 'LoginController@load')->name('login.load');