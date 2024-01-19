<?php

namespace Database\Factories;

use App\Enums\ApplicationStatus;
use App\Models\Employee;
use App\Models\JobPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_post_id' => JobPost::factory(),
            'employee_id' => Employee::factory(),

            'status' => fake()->randomElement(ApplicationStatus::cases())->value,
        ];
    }

}
