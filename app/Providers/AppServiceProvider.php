<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use App\Models\Tag;
use App\Models\User;
use App\Models\Section;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {       
        View::composer('*', function ($view) {
            $user = Auth::user();

            if(!Auth::check()){
                $activeUser = false;
            } else {
                $activeUser = $user;
            }

            $view->with('activeUser', $activeUser);
        });

        View::composer('*', function ($view) {
            $sections = Section::withCount('posts')->get();

            $view->with('sections', $sections);
        });

        View::composer('*', function ($view) {
            $posts = Post::where('is_active', 1)->orderBy('id', 'DESC')->withCount('sections')->withCount('comments')->get();

            $view->with('posts', $posts);
        });

        View::composer('*', function ($view) {
            $tags = Tag::withCount('posts')->get();

            $view->with('tags', $tags);
        });

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
