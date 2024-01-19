<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),

            'first_name' => ($firstName = fake()->firstName),
            'last_name' => ($lastName = fake()->lastName),
            'profile_picture' => fake()->imageUrl(word: "{$firstName} {$lastName}"),
        ];
    }

}
