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

Route::get('/', 'MainController@mainPage')->name('mainPage');

Route::get('/404', 'MainController@pageNotFound')->name('pageNotFound');

Route::get('/test', 'TestController@testGetMethod');

Route::post('/test', 'TestController@testPostMethod');

Route::get('test/redirect', 'TestController@redirectPage');

