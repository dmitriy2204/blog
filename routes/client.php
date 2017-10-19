<?php

Route::group(['prefix' => '/post'], function (){
	Route::get('/{id}', 'PostController@one')
		->where('id', '[0-9]+')
		->name('public.post.one');	

	Route::post('/add', 'PostController@add')
		->name('public.post.add');

	Route::match(['get', 'post'], '/edit/{id}', 'PostController@edit')
		->where('id', '[0-9]+')
		->name('public.post.edit');

	Route::get('/delete/{id}', 'PostController@delete')
		->where('id', '[0-9]+')
		->name('public.post.delete');
});

Route::group(['prefix' => '/user'], function (){
	Route::get('/{id}', 'UserController@one')
		->where('id', '[0-9]+')
		->name('public.user.one');	

	Route::match(['get', 'post'], '/add', 'UserController@add')
		->name('public.user.add');

	Route::match(['get', 'post'], '/login', 'UserController@login');	

	Route::get('/logout', 'UserController@logout');	

});

/*
Route::get('/', 'MainController@mainPage')->name('mainPage');

Route::get('/403', 'MainController@accessDenied')->name('accessDenied');
Route::get('/404', 'MainController@pageNotFound')->name('pageNotFound');
Route::get('/500', 'MainController@internalError')->name('internalError');

Route::get('/about', 'MainController@aboutPage')->name('aboutPage');

Route::get('/feedback', 'MainController@feedbackPage')->name('feedbackPage');