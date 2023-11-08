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
use App\Models\User;
use App\Models\MypageInfo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HorensoInfoSeeder::class,
            MypageInfoSeeder::class,
            NoticeSeeder::class,
            ScheduleStatus::class
        ]);

        User::factory(35)->create();
        MypageInfo::factory(60)->create();
        HorensoInfo::factory(60)->create();
    }
}
