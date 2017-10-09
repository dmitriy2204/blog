<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function index()
	{
		return 'Admin: Post Index';
	}

	public function one($id)
	{
		return 'Admin: View Post id = ' . $id;
	}

	public function add()
	{
		return 'Admin: Add new Post';
	}

	public function edit($id)
	{
		return 'Admin: Edit Post with id = ' . $id;
	}

	public function delete($id)
	{
		return 'Admin: Delete Post with id = ' . $id;
	}
}
