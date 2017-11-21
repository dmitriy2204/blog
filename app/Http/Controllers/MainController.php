<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
	public function mainPage()
	{
		return view('layouts.primary', [
			'page' => 'pages.main',
			'title' => 'Главная страница'
		]);
	}

	public function aboutPage()
	{
		return view('layouts.primary', [
			'page' => 'pages.about',
			'title' => 'Обо мне'
		]);
	}

	public function testPage()
    {
    	$users = DB::table('users')->distinct()->get();

    	dump($users);

    	return view('layouts.primary', [
            'page' => 'pages.test',
            'title' => 'Тест'
        ]);
    }

	public function feedbackPage()
	{
		if (!Auth::check()) {
			return redirect()
            ->route('public.user.login');
		}

		return view('layouts.primary', [
			'page' => 'pages.feedback',
			'title' => 'Обратная связь'
		]);
	}

	public function pageNotFound()
	{
		return view('errors.404', [
			'title' => '404 Страница не найдена'
		]);
	}

	public function accessDenied()
	{
		return view('errors.403', [
			'title' => '403 Доступ запрещен'
		]);
	}

	public function internalError()
	{
		return view('errors.500', [
			'title' => '500 Сервис временно недоступен'
		]);
	}

}
