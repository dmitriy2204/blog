<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function one($id)
	{
		return view('pages.one', [
			'title' => 'Просмотр статьи'
		]);
	}

	public function add()
	{
		return 'Public: Add new Post';
	}

	public function edit($id)
	{
		return 'Public: Edit Post with id = ' . $id;
	}

	public function delete($id)
	{
		return 'Public: Delete Post with id = ' . $id;
	}
}
