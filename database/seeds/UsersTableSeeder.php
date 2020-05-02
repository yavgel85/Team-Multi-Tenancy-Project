<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$BENfw0YG.UPX701QqMWRIuqnnFdsvP9GjhcFlBZiwWUniTZWZ69c.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
