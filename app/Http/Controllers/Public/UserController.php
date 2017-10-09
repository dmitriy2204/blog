<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function add()
	{
		return 'Public: Add new User';
	}

	public function login()
	{
		return 'Public: User login';
	}

	public function logout()
	{
		return 'Public: User logout';
	}
}
