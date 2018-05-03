<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ben',
            'email' => 'ben@example.com',
            'password' => 'ben123', // secret
        ]);
    }
}
