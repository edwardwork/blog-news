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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => '/news/', 'as' => 'news.'], function () {

    Route::get('/', 'NewsController@index')->name('index');

    Route::get('/create', 'NewsController@create')->name('create')->middleware(['auth', 'needAdmin']);

    Route::post('/', 'NewsController@store')->name('store')->middleware(['auth', 'needAdmin']);

    Route::get('/{news}', 'NewsController@show')->name('show');

    Route::get('/{news}/edit', 'NewsController@edit')->name('edit')->middleware(['auth', 'needAdmin']);

    Route::post('/{news}/update', 'NewsController@update')->name('update')->middleware(['auth', 'needAdmin']);

    Route::delete('/{news}', 'NewsController@destroy')->name('destroy')->middleware(['auth', 'needAdmin']);

});

Route::get('/manager', 'AdminController@index')->name('manager.index')->middleware(['auth', 'needAdmin']);;

Auth::routes();
