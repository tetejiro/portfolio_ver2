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
                'horenso_code' => 1,
                'member_code' => 1,
                'target_member_code' => 2,
                'title' => '報告・title',
                'request' => null,
                'detail' => '報告・detail',
                'cause' => null,
                'other' => '報告・other',
                'rsvp' => true,
                'created_at' => '2023/9/8 10:00'
            ],
            [
                'horenso_code' => 2,
                'member_code' => 1,
                'target_member_code' => 3,
                'title' => '質問・title',
                'request' => '質問・request',
                'detail' => '質問・detail',
                'cause' => '質問・cause',
                'other' => '質問・other',
                'rsvp' => null,
                'created_at' => '2023/9/9 11:00'
            ],
            [
                'horenso_code' => 3,
                'member_code' => 2,
                'target_member_code' => 3,
                'title' => '報告・title',
                'request' => null,
                'detail' => '報告・detail',
                'cause' => null,
                'other' => '報告・other',
                'rsvp' => true,
                'created_at' => '2023/9/8 10:00'
            ],
            [
                'horenso_code' => 4,
                'member_code' => 2,
                'target_member_code' => 3,
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
