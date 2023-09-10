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
                'id' => 1,
                'status' => '手伝ってほしい'
            ],
            [
                'id' => 2,
                'status' => 'いそがしい'
            ],
            [
                'id' => 3,
                'status' => '余裕がない'
            ],
            [
                'id' => 4,
                'status' => 'ふつう'
            ],
            [
                'id' => 5,
                'status' => 'ゆとりがある'
            ]
        ]);
    }
}
