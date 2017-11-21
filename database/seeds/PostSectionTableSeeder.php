<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Section;

class PostSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::find(1)->sections()->attach(3);
        Post::find(2)->sections()->attach([1,4]);
    }
}
