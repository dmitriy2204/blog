<?php

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'name' => 'Про жизнь'
        ]);

        Section::create([
            'name' => 'Разработка'
        ]);

        Section::create([
            'name' => 'Спорт'
        ]);

        Section::create([
            'name' => 'Путешествия'
        ]);
    }
}
