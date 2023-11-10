<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'year' => 1,
                'name' => '東由樹',
                'email' => 'tetemalu1gou@gmail.com',
                'password' => Hash::make('test1'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
            // [
            //     'year' => 2,
            //     'name' => '質問二郎',
            //     'email' => 'test2@test.com',
            //     'password' => Hash::make('test2'),
            //     'email_verified_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'year' => 3,
            //     'name' => '質問三郎',
            //     'email' => 'test3@test.com',
            //     'password' => Hash::make('test3'),
            //     'email_verified_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'year' => 4,
            //     'name' => '質問四郎',
            //     'email' => 'test4@test.com',
            //     'password' => Hash::make('test4'),
            //     'email_verified_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'year' => 5,
            //     'name' => '質問五郎',
            //     'email' => 'test5@test.com',
            //     'password' => Hash::make('test5'),
            //     'email_verified_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'year' => 6,
            //     'name' => '質問シニア',
            //     'email' => 'test6@test.com',
            //     'password' => Hash::make('test6'),
            //     'email_verified_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'year' => 1,
            //     'name' => '質問一郎',
            //     'email' => 'test1@test.com',
            //     'password' => Hash::make('test1'),
            //     'email_verified_at' => date('Y-m-d H:i:s')
            // ],
            [
                'year' => 6,
                'name' => '東由樹2',
                'email' => 'hy1733505@gmail.com',
                'password' => Hash::make('test2'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
