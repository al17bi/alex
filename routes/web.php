<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route для страниц администратора
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin','Admin\AdminController@index');
/*    Route::get('/admin', function () {
        return 'Admin - AlexHomeController@index';
    });
    Route::get('/settings', function () {
        return "this page requires that you be logged in and an Admin";
    });
*/
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();
/*  для остальных авторизованных пользователей
/   route кроме /home - который обрабатывается в AdminLTE пакете
*/
    Route::get('/settings', function(){
        return "эта страница для авторизованных пользователей";
    });
//    Route::get('/that-next-page', 'HomeController@index');
});
// Auth::routes();

