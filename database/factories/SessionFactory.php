<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "film_id" => \App\Models\Film::factory(),
            "hall_id" => \App\Models\Hall::factory(),
            "time" => $this->faker->dateTime($min='now'),
        ];
    }
}
