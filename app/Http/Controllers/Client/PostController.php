<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function one($id)
	{
		$post = Post::where('id', $id)->first();

		return view('layouts.secondary', [
			'page' => 'pages.one',
			'title' => 'Просмотр статьи',
			'post' => $post
		]);	
	}

	public function postsByTag($id)
	{
		$tags = Tag::withCount('posts')->get();
		$tag = Tag::where('id', $id)->first();
		$posts = $tag->posts;
		$title = $tag->name;
		
		return view('layouts.primary', [
			'page' => 'pages.main',
			'title' => $title,
			'posts' => $posts,
			'tags' => $tags
		]);	
	}

	public function add()
	{
		return 'Public: Add new Post';
	}

	public function edit($id)
	{
		return 'Public: Edit Post with id = ' . $id;
	}

	public function delete($id)
	{
		return 'Public: Delete Post with id = ' . $id;
	}
}
