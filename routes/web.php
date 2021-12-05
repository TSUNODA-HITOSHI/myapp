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
     Route::post('attend/create', 'Admin\AttendController@create');
     Route::get('attend', 'Admin\AttendController@index');
     Route::get('attend/done', 'Admin\AttendController@done');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'AttendController@index');

  //ハッシュタグレポートを取得
static function ($from, $until)
    {
        //created_atが20xx/xx/xx ~ 20xx/xx/xxのデータを取得
        $date = Date::whereBetween("created_at", [$from, $until])->get();

    Route::get('/month', 'DatesController@month');

        return $date;
    };