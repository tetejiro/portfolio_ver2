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
                'name' => '試用ユーザ',
                'email' => 'higashiyuki5@gmail.com',
                'password' => Hash::make('test1'),
                'email_verified_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
