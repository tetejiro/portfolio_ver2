<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notice;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notice::insert([
            [
                'notice_id' => 1,
                'content' => '今日は清掃の方が来ます。',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'notice_id' => 2,
                'content' => '創立記念日はお休みです。',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'notice_id' => 3,
                'content' => '次からの会議は10:00~になります。',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
