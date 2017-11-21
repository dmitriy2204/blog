<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'admin',
            'phone' => '+7(987)6543210',
            'user_id' => '1'
        ]);

        Profile::create([
            'name' => 'Dmitriy',
            'phone' => '+7(987)3216540',
            'user_id' => '2'
        ]);
    }
}
