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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('attend/create', 'Admin\AttendController@add');
     Route::post('attend/create', 'Admin\AttendController@create'); # 追記
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
