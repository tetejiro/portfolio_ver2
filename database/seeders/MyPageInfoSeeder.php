<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyPageInfo;

class MyPageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MyPageInfo::insert([
            [
                'user_id' => 1,
                'task_content' => 'FAQ部分の開発',
                'task_start' => '2023/10/9 10:00',
                'task_end' => '2023/10/9 16:00',
                'schedule_status' => 5,
                'available_start' => '10:00',
                'available_end' => '12:00',
                'caution' => '今日は比較的時間に余裕があるので、上記時間以外でも質問などうけられます。',
                'strong_point_1' => 'JavaScript',
                'strong_point_2' => '',
                'strong_point_3' => '',
                'created_at' => '2023/9/9 11:00'
            ],
            [
                'user_id' => 1,
                'task_content' => '定義書などのファイル修正',
                'task_start' => '2023/10/10 10:00',
                'task_end' => '2023/10/10 19:00',
                'schedule_status' => 1,
                'available_start' => '17:00',
                'available_end' => '18:00',
                'caution' => '今日は緊急以外は受け付けられません。',
                'strong_point_1' => 'JavaScript',
                'strong_point_2' => '',
                'strong_point_3' => '',
                'created_at' => '2023/9/9 12:00'
            ],
            [
                'user_id' => 1,
                'task_content' => 'カート部分の開発',
                'task_start' => '2023/10/11 10:00',
                'task_end' => '2023/10/14 16:00',
                'schedule_status' => 5,
                'available_start' => '17:00',
                'available_end' => '19:00',
                'caution' => "今日は比較的に忙しいですが明日は忙しくないです。\n明日に回せるようでしたら明日お願いします。",
                'strong_point_1' => 'FAQ部分の実装を担当したので回答できます。',
                'strong_point_2' => '要件に関すること',
                'strong_point_3' => 'JavaScript',
                'created_at' => '2023/9/9 11:00'
            ],
        ]);
    }
}
