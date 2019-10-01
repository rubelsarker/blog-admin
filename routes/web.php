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

Route::get('/','User\UserController@home')->name('home');
Route::get('post','User\UserController@post')->name('post');
Route::get('about','User\UserController@about')->name('about');
Route::get('contact','User\UserController@contact')->name('contact');

