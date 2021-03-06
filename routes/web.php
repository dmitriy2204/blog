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

Route::get('/403', 'MainController@accessDenied')->name('accessDenied');
Route::get('/404', 'MainController@pageNotFound')->name('pageNotFound');
Route::get('/500', 'MainController@internalError')->name('internalError');

Route::get('/about', 'MainController@aboutPage')->name('aboutPage');

Route::get('/feedback', 'MainController@feedback')->name('feedbackPage');
Route::post('/feedback', 'MainController@feedbackPost')->name('feedbackPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

