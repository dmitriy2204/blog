<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function testGetMethod(Request $request)
	{
		$token = csrf_token();
		$name = $request->input('name', 'Вася');
		$age = $request->input('age', '10');

		$html = <<<HTML
		<h1>Привет, $name! Тебе $age лет!</h1>
<form method="POST" action="">
	<input type="hidden" name="_token" value="$token">
	Login: <input type="text" name="login"><br>
	Password: <input type="text" name="password"><br>
	<input type="submit" value="OK!">
</form>
HTML;
		return $html;
	}

	public function testPostMethod(Request $request)
	{
		$login = $request->input('login');
		$password = $request->input('password');

		dump([$login, $password]);
	}

	public function redirectPage()
	{
		/*
		$url = route('pageNotFound');
		echo $url;
		*/

		return redirect()->route('mainPage');
	}
	
}
