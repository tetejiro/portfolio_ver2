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
                'target_user_id' => 2,
                'is_question' => false,
                'title' => '報告・title',
                'request' => null,
                'detail' => '報告・detail',
                'cause' => null,
                'other' => '報告・other',
                'rsvp' => true,
                'created_at' => '2023/9/8 10:00'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'target_user_id' => 3,
                'is_question' => true,
                'title' => '質問・title',
                'request' => '質問・request',
                'detail' => '質問・detail',
                'cause' => '質問・cause',
                'other' => '質問・other',
                'rsvp' => null,
                'created_at' => '2023/9/9 11:00'
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'target_user_id' => 3,
                'is_question' => false,
                'title' => '報告・title',
                'request' => null,
                'detail' => '報告・detail',
                'cause' => null,
                'other' => '報告・other',
                'rsvp' => true,
                'created_at' => '2023/9/8 10:00'
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'target_user_id' => 3,
                'is_question' => true,
                'title' => '質問・title',
                'request' => '質問・request',
                'detail' => '質問・detail',
                'cause' => '質問・cause',
                'other' => '質問・other',
                'rsvp' => null,
                'created_at' => '2023/9/9 11:00'
            ]
        ]);
    }
}
