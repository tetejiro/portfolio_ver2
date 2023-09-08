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
                'id' => 1,
                'year' => 1,
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('test'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'year' => 2,
                'name' => '質問二郎',
                'email' => 'test2@test.com',
                'password' => Hash::make('test2'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'year' => 3,
                'name' => '質問三郎',
                'email' => 'test3@test.com',
                'password' => Hash::make('test3'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'year' => 4,
                'name' => '質問四郎',
                'email' => 'test4@test.com',
                'password' => Hash::make('test4'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'year' => 5,
                'name' => '質問五郎',
                'email' => 'test5@test.com',
                'password' => Hash::make('test5'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'year' => 6,
                'name' => '質問シニア',
                'email' => 'test6@test.com',
                'password' => Hash::make('test6'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
