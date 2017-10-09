<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function index()
	{
		return 'Admin: User Index';
	}

	public function one($id)
	{
		return 'Admin: View User info id = ' . $id;
	}

	public function add()
	{
		return 'Admin: Add new User';
	}

	public function edit($id)
	{
		return 'Admin: Edit User with id = ' . $id;
	}

	public function delete($id)
	{
		return 'Admin: Delete User with id = ' . $id;
	}
}
