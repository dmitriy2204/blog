<?php

Route::group(['prefix' => '/post'], function (){
	Route::get('/{id}', 'PostController@one')
		->where('id', '[0-9]+')
		->name('public.post.one');

	Route::post('/{id}', 'PostController@addComment')
		->where('id', '[0-9]+')
		->name('public.post.addComment');		

	Route::get('/add', 'PostController@add')
		->name('public.post.add')
		->middleware('auth');		

	Route::post('/add', 'PostController@addPost')
		->name('public.post.addPost')
		->middleware('auth');

	Route::get('/edit/{id}', 'PostController@edit')
		->where('id', '[0-9]+')
		->name('public.post.edit');	
		
	Route::post('/edit/{id}', 'PostController@editPost')
		->where('id', '[0-9]+')
		->name('public.post.editPost');

	Route::get('/delete/{id}', 'PostController@delete')
		->where('id', '[0-9]+')
		->name('public.post.delete');

	Route::get('/category/{id}', 'PostController@postsBySection')
		->where('id', '[0-9]+')
		->name('public.post.category');

	Route::get('/tag/{id}', 'PostController@postsByTag')
		->where('id', '[0-9]+')
		->name('public.post.tag');	
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

