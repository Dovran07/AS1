<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'English',
            'Russian',
            'Dutch',
            'Math',
            'Physics',
            'Chemistry',
            'Programming',
            'Web-Programming',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = $course;
            $obj->save();
        }
    }
}
