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

Route::get('/profile', 'AdminController@profile')->name('admin.profile');

Route::get('/editProfile', 'AdminController@editProfile')->name('admin.editProfile');
Route::post('/editProfile', 'AdminController@editUser');

Route::get('/userlist', 'AdminController@list')->name('admin.userlist');
Route::get('/user/delete/{id}', 'AdminController@deleteuser')->name('admin.deleteuser');

Route::get('/admin/booklist', 'BookController@list')->name('book.list');

Route::get('/admin/addbook', 'BookController@addbook')->name('book.add');
Route::post('/admin/addbook', 'BookController@storebook');

Route::get('/book/delete/{id}', 'BookController@deletebook')->name('book.deletebook');

Route::get('/customer/booklist', 'BookController@listcust')->name('book.custbook');

Route::get('/customer/addtocart/{id}', 'BookController@addtocart')->name('book.addtocart');

Route::get('/customer/cart', 'CustomerController@cart')->name('customer.cart');
