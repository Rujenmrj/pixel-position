<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name,
            'logo'=>'logos/xGcBcydPerw4XVRY1M2X57P4QRCU1ewWNcjzaUjD.jpg',
            'url'=>fake()->unique()->url,
            'user_id'=> User::factory(),
        ];
    }
}
