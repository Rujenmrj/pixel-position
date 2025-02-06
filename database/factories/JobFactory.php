<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary'=> fake()->numberBetween(1, 9). '0000',
            'location' => fake()->randomElement(['Remote', 'On-site']),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time']),
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
