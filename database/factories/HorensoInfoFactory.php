<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HorensoInfo>
 */
class HorensoInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userNum = \App\Models\User::count();

        $is_question = fake()->boolean();
        $request_for = $is_question ? fake()->realText() : null;
        $rsvp = $is_question ? fake()->numberBetween(1, 2) : null;

        return [
            'user_id' => fake()->numberBetween(2, $userNum),
            'target_user_id' => fake()->numberBetween(1, $userNum),
            'is_question' => $is_question,
            'title' => fake()->realText(),
            'request_for' => $request_for,
            'detail' => fake()->realText(),
            'cause' => $request_for,
            'other' => fake()->realText(),
            'rsvp' => $rsvp,
            'created_at' => $this->faker->dateTimeThisDecade->modify('+2 years')
        ];
    }
}
