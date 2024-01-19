<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Application;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\JobPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $employees = Employee::factory()->createMany(10);
        $employers = Employer::factory()->createMany(10);

        $jobPosts = new Collection();
        $employers->each(function (Employer $employer) use (&$jobPosts) {
            // Create between 1 and 10 job posts for each employer
            $jobPosts = $jobPosts->merge(JobPost::factory()->for($employer)->createMany(random_int(1, 10)));
        });

        $employees->each(function (Employee $employee) use ($jobPosts) {
            // Have each employee apply to between 1 and 10 job posts
            $jobPosts->random(random_int(1, 10))->each(function (JobPost $jobPost) use ($employee) {
                Application::factory()->for($employee)->for($jobPost)->create();
            });
        });
    }
}
