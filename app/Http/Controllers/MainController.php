<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
	public function mainPage()
	{
		$tags = Tag::withCount('posts')->get();
		$posts = Post::where('is_active', 1)->withCount('tags')->get();

		return view('layouts.primary', [
			'page' => 'pages.main',
			'title' => 'Главная страница',
			'posts' => $posts,
			'tags' => $tags
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
		if(!Auth::check()){
			return redirect()
            ->route('public.user.login');
		}

		return view('layouts.primary', [
			'page' => 'pages.feedback',
			'title' => 'Обратная связь',
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

	public function relations()
	{/*
		$user = User::find(1);
		$userProfile = $user->profile;

		dump($user->email, $userProfile->name, $userProfile->phone);

		$userModel = Profile::where('name', 'Dmitrii')->first()->user->id;
		dump($userModel);

		$postsByUser1 = User::find(1)->posts;

		$postsByUser2 = Post::where('user_id', 1)->get();

		$postsByUser3 = DB::table('posts')
			->where('user_id', 1)
			->get();

		dump($postsByUser1, $postsByUser2, $postsByUser3);
*/
/*
		$posts = User::find(1)->posts;
		$title = Post::where('id', 1)->first()->title;

		$tags = Post::where('slug', '111')->first()->tags;
*/
		//$postsByTag = Tag::where('name', 'Спорт')->first()->posts;
/*
		foreach ($postsByTag as $post) {
			echo $post->title . '';
		}

		$posts = Post::has('tags')->get();
		$posts1 = Post::withCount('tags')->get();

		foreach ($posts1 as $post) {
			echo $post->title . ' - ' . $post->tags_count, '<br>';
		}

		$post = new Post([
			'title' => 'Post3',
			'slug' => '333',
			'tagline' => 'New post',
			'fulltext' => 'This is new post'
		]);

		$user = User::find(1);
		$user->posts()->save($post);
		*/
/*
		User::find(1)->posts()->create([
			'title' => 'Post4',
			'slug' => '4',
			'tagline' => 'New post 4',
			'fulltext' => 'This is new post 4'
		]);
*/
		//Post::find(4)->tags()->attach(3);
		/*
		Post::find(4)
			->tags()
			->detach(Tag::where('name', 'Про жизнь')->first()->id);
		*/
/*
		В базе есть таблицы posts и tags, перекрестная таблица post_tag со столбцами post_id и tag_id. 
		Нужно сделать миграцию, добавить уникальный составной индекс, чтобы пара post_id-tag_id не повторялась.

		Schema::table('post_tag', function (Blueprint $table) {
    		$table->unique('post_id', 'tag_id');
		});
*/		

		$tags = Tag::all();
		foreach ($tags as $tag) {
			echo $tag->name;
		}

			
	}
}
