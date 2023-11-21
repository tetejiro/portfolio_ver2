<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HorensoInfo;

class HorensoInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HorensoInfo::insert([
            [
                'id' => 1,
                'user_id' => 1,
                'target_user_id' => 3,
                'is_question' => true,
                'title' => 'テスト仕様書に関して',
                'request_for' => 'テストケース8に関して、以下の確認をお願いします。',
                'detail' => 'テストケース8のテストパターンは---の理由で実行しなくてもいいかと思ったのですが、いかがでしょうか？',
                'cause' => null,
                'other' => null,
                'rsvp' => null,
                'created_at' => '2023/9/8 10:00'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'target_user_id' => 4,
                'is_question' => false,
                'title' => 'テスト仕様書の作成が完了しました。',
                'request_for' => '確認をお願いします。',
                'detail' => '',
                'cause' => '',
                'other' => '',
                'rsvp' => true,
                'created_at' => '2023/9/8 11:00'
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'target_user_id' => 5,
                'is_question' => false,
                'title' => 'テストが完了しました。',
                'request_for' => '確認をお願いします。',
                'detail' => '',
                'cause' => '',
                'other' => '',
                'rsvp' => false,
                'created_at' => '2023/9/8 11:00'
            ],
        ]);
    }
}
