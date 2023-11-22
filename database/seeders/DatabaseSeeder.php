<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HorensoInfo;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\HorensoInfoSeeder;
use Database\Seeders\MyPageInfoSeeder;
use Database\Seeders\NoticeSeeder;
use Database\Seeders\ScheduleStatus;
use App\Models\User;
use App\Models\MyPageInfo;

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
            MyPageInfoSeeder::class,
            NoticeSeeder::class,
            ScheduleStatus::class
        ]);

        User::factory(40)->create();
        MyPageInfo::factory(60)->create();
        HorensoInfo::factory(60)->create();
    }
}
