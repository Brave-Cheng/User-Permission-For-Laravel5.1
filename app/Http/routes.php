<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'auth'], function() {

    // 登陆
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
    // 退出
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
    // 注册
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
    Route::post('register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);
});

Route::group(['prefix' => 'dashborad', 'middleware' => 'auth'], function() {
    // 后台默认首页
    Route::get('/', ['as' => 'dashborad.index', 'uses' => 'DashboardController@index']);
});
