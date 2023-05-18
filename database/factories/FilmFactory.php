<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'poster' => $this->faker->imageUrl,
            'age' => random_int(0,18),
            'year' => $this->faker->year,
            'original_name' => $this->faker->name,
            'duration' => random_int(20,180), 
            'description' => $this->faker->text, 
            'released' => $this->faker->boolean(),
            'release_start_at' => $this->faker->dateTime, 
            'release_end_at' => $this->faker->dateTime, 
        ];
    }
}
