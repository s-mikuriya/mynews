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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    //PHP_13
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    //PHP_15
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    //PHP_16
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
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
    
    //PHP_13 課題3
    Route::post('profile/create', 'Admin\ProfileController@create');
    //PHP_13 課題6
    Route::post('profile/edit', 'Admin\ProfileController@update');
    
    //index
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//PHP_18
Route::get('/', 'NewsController@index');

Route::get('/profile', 'ProfileController@index');
