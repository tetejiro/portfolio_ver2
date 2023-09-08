<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HorensoInfo;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\HorensoInfoSeeder;
use Database\Seeders\MypageInfoSeeder;
use Database\Seeders\NoticeSeeder;
use Database\Seeders\ScheduleStatus;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            $this->call([
                UserSeeder::class,
                HorensoInfoSeeder::class,
                MypageInfoSeeder::class,
                NoticeSeeder::class,
                ScheduleStatus::class
            ]);
    }
}
