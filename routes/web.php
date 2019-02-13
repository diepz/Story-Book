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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', 'StoryController@create')->name('admin.create');
Route::post('/create','StoryController@store')->name('admin.store');
Route::get('/list', 'StoryController@index')->name('admin.list');
Route::get('/edit/{id}', 'StoryController@edit')->name('admin.edit');
Route::post('/edit/{id}', 'StoryController@update')->name('admin.update');
Route::get('/delete/{id}', 'StoryController@destroy')->name('admin.destroy');
