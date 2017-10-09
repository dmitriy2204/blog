<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class PostController extends MainController
{
	public function one($id)
	{
		return 'Public: View Post id = ' . $id;
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
