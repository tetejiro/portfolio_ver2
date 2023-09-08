<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ScheduleStatus as Status;

class ScheduleStatus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::insert([
            [
                'status_id' => 1,
                'status' => '手伝ってほしい'
            ],
            [
                'status_id' => 2,
                'status' => 'いそがしい'
            ],
            [
                'status_id' => 3,
                'status' => '余裕がない'
            ],
            [
                'status_id' => 4,
                'status' => 'ふつう'
            ],
            [
                'status_id' => 5,
                'status' => 'ゆとりがある'
            ]
        ]);
    }
}
