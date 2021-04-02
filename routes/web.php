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

Route::get('/','ShortUrlController@index')->name('index');
Route::post('/shorten','ShortUrlController@shorten')->name('shorten');
Route::get('/{url}','ShortUrlController@fetchLink')->name('fetch');
