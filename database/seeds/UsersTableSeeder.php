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
                'name'           => 'Admin ResepKita',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('adminadmin'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
