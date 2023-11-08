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
        $decade = $this->faker->dateTimeThisDecade;
        $created_at = $decade->modify('+2 years');
        $created_at_before = date("Y-m-d H:i:s", strtotime("-1 day", time()));
        $userNum = \App\Models\User::count();

        return [
            'user_id' => fake()->numberBetween(1, $userNum),
            'task_content' => fake()->realText(255),
            'task_start' => $created_at_before,
            'task_end' => $created_at,
            'schedule_status' => fake()->numberBetween(1, 5),
            'available_start' => '10:00',
            'available_end' => '15:00',
            'caution' => fake()->realText(255),
            'strong_point_1' => fake()->realText(),
            'strong_point_2' => fake()->realText(),
            'strong_point_3' => fake()->realText(),
            'created_at' => $created_at
        ];
    }
}
