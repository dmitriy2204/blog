<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function mainPage()
	{
		return view('pages.main', [
			'title' => 'Главная страница'
		]);
	}

	public function aboutPage()
	{
		return view('pages.about', [
			'title' => 'Обо мне'
		]);
	}

	public function feedbackPage()
	{
		return view('pages.feedback', [
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
