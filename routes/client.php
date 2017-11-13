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

	Route::get('/category/{id}', 'PostController@postsByTag')
		->where('id', '[0-9]+')
		->name('public.post.category');	
});

Route::group(['prefix' => '/user'], function (){
	Route::get('/{id}', 'UserController@one')
		->where('id', '[0-9]+')
		->name('public.user.one');	

	Route::get('/register', 'UserController@register')
		->name('public.user.register');

	Route::post('/register', 'UserController@registerPost')
		->name('public.user.registerPost');	

	Route::get('/login', 'UserController@login')
		->name('public.user.login');	
	
	Route::post('/login', 'UserController@loginPost')
		->name('public.user.loginPost');	

	Route::get('/logout', 'UserController@logout');	

});

