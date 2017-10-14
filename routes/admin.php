<?php

Route::group(['prefix' => '/user'], function (){
	Route::get('/', 'UserController@index')
		->name('admin.user.index');

	Route::get('/{id}', 'UserController@one')
		->where('id', '[0-9]+')
		->name('admin.user.one');	

	Route::match(['get', 'post'], '/add', 'UserController@add')
		->name('admin.user.add');

	Route::match(['get', 'post'], '/edit/{id}', 'UserController@edit')
		->where('id', '[0-9]+')
		->name('admin.user.edit');

	Route::get('/delete/{id}', 'UserController@delete')
		->where('id', '[0-9]+')
		->name('admin.user.delete');
});

Route::group(['prefix' => '/post'], function (){
	Route::get('/', 'PostController@index')
		->name('admin.post.index');

	Route::get('/{id}', 'PostController@one')
		->where('id', '[0-9]+')
		->name('admin.post.one');	

	Route::match(['get', 'post'], '/add', 'PostController@add')
		->name('admin.post.add');

	Route::match(['get', 'post'], '/edit/{id}', 'PostController@edit')
		->where('id', '[0-9]+')
		->name('admin.post.edit');

	Route::get('/delete/{id}', 'PostController@delete')
		->where('id', '[0-9]+')
		->name('admin.post.delete');
});