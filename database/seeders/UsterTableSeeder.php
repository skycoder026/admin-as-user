<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(['id' => 1], [
            'name'      => 'Mr. Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            'user_type' => 'admin',
        ]);

        User::firstOrCreate(['id' => 2], [
            'name'      => 'Mr. User',
            'email'     => 'user1@gmail.com',
            'password'  => bcrypt('12345678'),
            'user_type' => 'user',
        ]);

        User::firstOrCreate(['id' => 3], [
            'name'      => 'User 2',
            'email'     => 'user2@gmail.com',
            'password'  => bcrypt('12345678'),
            'user_type' => 'user',
        ]);
    }
}
