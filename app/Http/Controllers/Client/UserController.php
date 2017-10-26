<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterFormRequest;


class UserController extends Controller
{
	public function one($id)
	{
		return 'Public: View User id = ' . $id;
	}

	public function register()
	{
		return view('layouts.secondary', [
			'page' => 'pages.register',
			'title' => 'Регистрация'
		]);
	}

	public function registerPost(RegisterFormRequest $request)
	{

		DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'phone' => $request->input('phone'),
            'created_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->route('mainPage');
	}

	public function login()
	{
		return view('layouts.secondary', [
			'page' => 'pages.auth',
			'title' => 'Авторизация'
		]);
	}

	public function loginPost(Request $request)
	{
		$remember = $request->input('remember') ? true : false;

		$authResult = Auth::attempt([
			'email' => $request->input('email'),
			'password' => $request->input('password')
		], $remember);

		if ($authResult) {
			return redirect()
				->route('mainPage');
		} else {
			return redirect()
				->route('public.user.login')
				->with('authError', 'Неправильный логин или пароль');
		}
	}

	public function logout()
	{
		Auth::logout();

		return redirect()
            ->route('mainPage');
	}
}
