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


/**
 * 后台路由规则
 */
Route::group(['namespace' => 'Admin', 'domain' => 'admin.build4dream.com'], function () {
    Auth::routes();
    Route::get('/home','IndexController@index')->name('home');
    Route::resource('user', 'UserController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


