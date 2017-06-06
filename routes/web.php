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

/**
 * 后台路由规则
 */
Route::group(['namespace' => 'Admin', 'domain' => 'admin.build4dream.com'], function () {
    Route::get('/home','IndexController@index')->name('home');
    Route::get('login', 'Auth\LoginController@login')->name('login');
    Route::post('login', 'Auth\LoginController@doLogin');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


