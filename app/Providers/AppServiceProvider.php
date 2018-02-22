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
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        View::share('popularPost', Post::where('is_active', 1)->orderBy('views_count', 'desc')->first());
        View::share('favouritePost', Cache::remember('favouritePost', env('CACHE_TIME', 0), function(){
            return Post::where('is_favourite', '1')->first();
        }));

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
            $view->with('sections', Cache::remember('sections', env('CACHE_TIME', 0), function(){
                return Section::withCount('posts')->get();
            }));
        });

        View::composer('*', function ($view) {
            $posts = Post::where('is_active', 1)->orderBy('id', 'DESC')->withCount('comments')->get();

            $view->with('posts', $posts);
        });

        /*View::composer('*', function ($view) {
            $view->with('posts', Cache::remember('postsList', env('POSTS_CACHE_TIME', 0), function(){
                return Post::with('comments')->where('is_active', 1)->orderBy('id', 'DESC')->withCount('comments')->get();
            }));
        });*/

        View::composer('*', function ($view) {
            $view->with('tags', Cache::remember('tags', env('CACHE_TIME', 0), function(){
                return Tag::all();
            }));
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
