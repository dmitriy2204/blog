<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function mainPage()
	{
		return view('welcome');
	}

	public function pageNotFound()
	{
		return view('404');
	}
}
