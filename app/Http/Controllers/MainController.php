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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Mail\FeedbackMail;
use App\Events\FeedbackWasCreated;

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

	public function feedback()
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

	public function feedbackPost(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:2|max:50',
			'email' => 'required|max:50|email',
			'message' => 'required|max:10240|min:10'
		]);

		event(
			new FeedbackWasCreated($request->all())
		);

		Mail::to(env('MAIL_TO'))
			->send(
				new FeedbackMail($request->all()
				)
			);

		return redirect()->route('mainPage')
        	->with('message', 'Спасибо за ваше сообщение!');
	}

}
