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

Route::group(['prefix' => 'admin'], function () {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

//PHP_09
//課題３
Route::get('XXX', 'Admin\AAAController@bbb');

//課題4
Route::group(['prefix' => 'admin'], function () {
    //PHP_12 課題2
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    //PHP_12 課題3
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
