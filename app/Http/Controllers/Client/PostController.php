<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Section;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PostCreateRequest;
use Illuminate\Support\Facades\Redirect;
use App\Classes\Uploader;


class PostController extends Controller
{
	protected $anyTagline = '4';

	public function one($id)
	{
		try {
			$post = Post::withCount('comments')->findOrFail($id);
		} catch (\Exception $e) {
			abort(404);
		}
			session(['post_id' => $id]);
			event('postViewed', $post);

			return view('layouts.secondary', [
				'page' => 'pages.one',
				'title' => 'Просмотр статьи',
				'post' => $post
			]);	
		
	}

	public function postsBySection($id)
	{
		$section = Section::find($id);
		
		return view('layouts.primary', [
			'page' => 'pages.main',
			'title' => $section->name,
			'postsBySection' => $section->posts()->withCount('comments')->get()
		]);	
	}

	public function postsByTag($id)
	{
		$tag = Tag::find($id);
		
		return view('layouts.primary', [
			'page' => 'pages.main',
			'title' => $tag->name,
			'postsByTag' => $tag->posts()->withCount('comments')->get()
		]);	
	}

	public function add()
	{
		$this->authorize('create', Post::class);

		return view('layouts.primary', [
        	'page' => 'pages.add',
        	'title' => 'Создание статьи'
    	]);		
	}

	public function addPost(PostCreateRequest $request, Uploader $uploader)
	{
		$this->authorize('create', Post::class);
		$image = $uploader->imageUpload($request) ?? null;
		$tagId = Tag::where('name', $request->input('tagline'))->first()->id ?? $this->anyTagline;

		$post = Post::create([
			'image' => $image,
			'title' => $request->input('title'),
            'tagline' => $request->input('tagline'),
            'announce' => $request->input('announce'),
            'fulltext' => $request->input('fulltext'),
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s')
    	]);   

    	$post->sections()->attach($request->input('section'));      
    	$post->tags()->attach($tagId);      

        return redirect()->route('mainPage')
        	->with('message', 'Статья успешно добавлена!');
	}

	public function addComment(Request $request)
	{
		$post = Post::find(session('post_id'));

		$this->validate($request, [
            'text' => 'required'
        ]);

        $post->comments()->create([
            'text' => $request->input('text'),
            'user_id' => Auth::user()->id,
            'post_id' => $post->id
        ]);
        
        return redirect()
        	->back()
        	->with('message', 'Комментарий добавлен!');
	}

	public function edit($id)
	{
		$this->authorize('edit', Post::class);
		$post = Post::find($id);

		return view('layouts.primary', [
        	'page' => 'pages.edit',
        	'title' => 'Редактирование статьи',
        	'post' => $post
    	]);
    }	

	public function editPost($id, PostCreateRequest $request, Uploader $uploader)
	{
		$this->authorize('edit', Post::class);
		$post = Post::find($id);
		$tagId = Tag::where('name', $request->input('tagline'))->first()->id ?? $this->anyTagline;

		$image = $uploader->imageUpload($request) ?? $post->image;

		$post->update([
			'title' => $request->input('title'),
            'tagline' => $request->input('tagline'),
            'announce' => $request->input('announce'),
            'fulltext' => $request->input('fulltext'),
            'image' => $image
    	]);

		$post->tags()->sync($tagId);

		try {
			$post->sections()->attach($request->input('section'));
		} catch (\Exception $e) {}
    	

        return redirect()->route('mainPage')
        	->with('message', 'Статья успешно изменена!');
	}

	public function delete($id)
	{
		$this->authorize('delete', Post::class);
		Post::find($id)->delete();

		return redirect()->route('mainPage')
        	->with('message', 'Статья успешно удалена!');
	}

	public function deleteComment($id)
	{
		$this->authorize('delete', Post::class);
		Comment::find($id)->delete();

		return redirect()->back()
        	->with('message', 'Комментарий успешно удален!');
	}
}
