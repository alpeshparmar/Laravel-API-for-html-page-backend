<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'test3',
            'email' => 'test3@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'test4',
            'email' => 'test4@gmail.com',
            'password' => bcrypt('12345'),
        ]);


        User::create([
            'name' => 'test5',
            'email' => 'test5@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'test6',
            'email' => 'test6@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'test7',
            'email' => 'test7@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
