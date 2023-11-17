<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyPageInfo>
 */
class MyPageInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
	    $task_start = fake()->dateTimeBetween('-2 years', 'now'); //開始時間
	    $plusMinute = '+'. (string)rand(0, 14400). ' minute'; //終了時間（ 開始時間にランダムな分数足している）
	    $start_hour = rand(10, 18); // 空き時間（開始時間）H
	    $end_hour = rand($start_hour + 1, 19); // 空き時間（終了時間）H
	    $start_min = rand(0, 59); // 空き時間（開始時間）m
	    $end_min = rand(0, 59); // 空き時間（終了時間）m
        $start_time = $start_hour.':'.str_pad($start_min, 2, 0, STR_PAD_LEFT);
        $end_time = $end_hour. ':'. str_pad($end_min, 2, 0, STR_PAD_LEFT);
        $userNum = \App\Models\User::count();

        return [
            'user_id' => fake()->numberBetween(1, $userNum),
            'task_content' => fake()->realText(255, 5),
            'task_start' => $task_start->format('Y-m-d H:i'),
            'task_end' => $task_start->modify($plusMinute)->format('Y-m-d H:i'),
            'schedule_status' => fake()->numberBetween(1, 5),
            'available_start' => $start_time,
            'available_end' => $end_time,
            'caution' => fake()->realText(255, 5),
            'strong_point_1' => fake()->realText(),
            'strong_point_2' => fake()->realText(),
            'strong_point_3' => fake()->realText(),
            'created_at' => date('Y-m-d H:i')
        ];
    }
}
