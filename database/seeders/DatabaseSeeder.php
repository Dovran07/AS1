<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClassroomSeeder::class,
            CourseSeeder::class,
            SeasonSeeder::class,
        ]);
        \App\Models\Student::factory()->count(1000)->create();
        \App\Models\Teacher::factory()->count(20)->create();
        \App\Models\Lesson::factory()->count(100)->create();
        \App\Models\Registration::factory()->count(2000)->create();
    }
}
