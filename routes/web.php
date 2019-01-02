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

Route::get('login', 'UsersController@getLogin')->name('login');
Route::post('login', 'UsersController@postLogin');

Route::get('register', 'UsersController@getRegister')->name('register');
Route::post('register', 'UsersController@postRegister');

Route::get('edit/{id}', 'UsersController@getEdit');
Route::post('edit', 'UsersController@postEdit');


Route::get('forgotpassword', 'UsersController@getForgotPassword')->name('password.forgot');
Route::post('forgotpassword', 'UsersController@postForgotPassword');

Route::get('change_password', 'UsersController@getChangePassword');
Route::post('change_password', 'UsersController@postChangePassword');