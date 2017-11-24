<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Путешествия'
        ]);

        Tag::create([
            'name' => 'Спорт'
        ]);

        Tag::create([
            'name' => 'Разработка'
        ]);

        Tag::create([
            'name' => 'Разное'
        ]);
    }
}
