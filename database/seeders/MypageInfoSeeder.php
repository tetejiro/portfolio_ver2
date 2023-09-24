<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MypageInfo;

class MypageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MypageInfo::insert([
            [
                'user_id' => 1,
                'task_content' => '新規画面開発',
                'task_start' => '2023/10/11 10:00',
                'task_end' => '2023/10/21 10:00',
                'schedule_status' => 5,
                'available_start' => '10:00',
                'available_end' => '15:00',
                'caution' => '注意：よくリファレンスを読むように。',
                'strong_point_1' => 'テストなら任せろ！',
                'strong_point_2' => 'テストなら任せろ！',
                'strong_point_3' => 'テストなら任せろ！',
                'created_at' => '2023/9/9 11:00'
            ],
            [
                'user_id' => 1,
                'task_content' => 'テスト',
                'task_start' => '2023/10/24 10:00',
                'task_end' => '2023/10/25 10:00',
                'schedule_status' => 1,
                'available_start' => '17:00',
                'available_end' => '18:00',
                'caution' => '注意：「絶対に」リファレンスを読むように。',
                'strong_point_1' => 'テストテストテストテスト',
                'strong_point_2' => 'テストなら任せろ！',
                'strong_point_3' => 'テストなら任せろ！',
                'created_at' => '2023/9/9 12:00'
            ],
            [
                'user_id' => 1,
                'task_content' => 'テスト2',
                'task_start' => '2023/10/27 10:00',
                'task_end' => '2023/10/28 10:00',
                'schedule_status' => 1,
                'available_start' => '17:00',
                'available_end' => '18:00',
                'caution' => '注意：「絶対に」リファレンスを読むように。',
                'strong_point_1' => 'テストテストテストテスト',
                'strong_point_2' => 'テストなら任せろ！',
                'strong_point_3' => 'テストなら任せろ！',
                'created_at' => '2023/9/10 12:00'
            ],
            [
                'user_id' => 3,
                'task_content' => 'テストテストテストテスト',
                'task_start' => '2023/10/24 10:00',
                'task_end' => '2023/10/25 10:00',
                'schedule_status' => 1,
                'available_start' => '17:00',
                'available_end' => '18:00',
                'caution' => '注意：「絶対に」リファレンスを読むように。',
                'strong_point_1' => 'テストテストテストテスト',
                'strong_point_2' => 'テストなら任せろ！',
                'strong_point_3' => 'テストなら任せろ！',
                'created_at' => '2023/9/9 14:00'
            ],
        ]);
    }
}
