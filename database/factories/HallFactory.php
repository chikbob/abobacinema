<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "hall_generator_id" => \App\Models\HallGenerator::factory(),
            'row' => $this->faker->numberBetween(1,12),
            'seat' => $this->faker->numberBetween(1,30),
            'price' => $this->faker->numberBetween(100,1300),
            'purchased' => $this->faker->boolean(),
        ];
    }
}
