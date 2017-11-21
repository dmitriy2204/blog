<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '123456';

        User::create([
            'email' => 'admin@test.ru',
            'password' => bcrypt($password),
            'can_create' => '1',
            'can_edit' => '1',
            'can_delete' => '1',
        ]);

        User::create([
            'email' => 'dima@test.ru',
            'password' => bcrypt($password)
        ]);

    }
}
