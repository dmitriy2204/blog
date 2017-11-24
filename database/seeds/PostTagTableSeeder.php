<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::find(1)->tags()->attach([3,4]);
        Post::find(2)->tags()->attach([1,2]);
        Post::find(3)->tags()->attach(1);
        Post::find(4)->tags()->attach(2);
        Post::find(5)->tags()->attach(1);
    }
}
