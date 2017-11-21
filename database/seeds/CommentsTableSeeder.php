<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'user_id' => '1',
            'post_id' => 2,
            'text' => 'Первый коммент'
        ]);

        Comment::create([
            'user_id' => '2',
            'post_id' => 2,
            'text' => 'Второй коммент'
        ]);
    }
}
