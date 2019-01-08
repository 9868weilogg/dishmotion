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

Route::get('/','HomeController@index');
Route::resource('/home','HomeController');
Route::resource('/orders','OrderController');
Route::resource('/admins','AdminController');


Route::get('/login-admin','Auth\LoginController@show_dishmotion_admin_login');
Route::post('/login-admin','Auth\LoginController@post_dishmotion_admin_login');
Route::get('/logout','Auth\LoginController@dishmotion_logout');
