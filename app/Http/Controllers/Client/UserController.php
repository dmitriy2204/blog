<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
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
		$create = User::create([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'created_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s')
        ]);
			
        if ($create) {
        	Profile::create([
	        	'user_id' => $create->id,
	        	'name' => $request->input('name'),
	            'phone' => $request->input('phone'),
	            'created_at' => Carbon::createFromTimestamp(time())
	                ->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::createFromTimestamp(time())
	                ->format('Y-m-d H:i:s')
        	]);
        };	

        return redirect()
            ->route('mainPage')
            ->with('message', 'Вы успешно зарегистрированы!');
	}

	public function login()
	{
		Session::put('url.intended', URL::previous());

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

		if (!$authResult) {
			return redirect()
				->back()
				->with('authError', 'Неправильный логин или пароль!');
		}

		//return Redirect::to(Session::get('url.intended')); //Не работает, если пользователь сделает ошибку при вводе данных
		return Redirect::intended();//редиректит на главную страницу, а не туда, куда шел пользователь
	}

	public function logout()
	{
		Auth::logout();

		return back();
	}

}
