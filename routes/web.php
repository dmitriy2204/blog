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

Route::get('/404', function () {
    return view('404');
});

//Route::get('/', 'MainController@index');

Route::redirect('/here', '/there', 302);

//Route::get('/404', 'MainController@pageNotFound');

//Route::get('/test', 'TestController@testGetMethod');

//Route::post('/test', 'TestController@testPostMethod');
