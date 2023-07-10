<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $course = DB::table('courses')->inRandomOrder()->first();
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        $teacher = DB::table('teachers')->inRandomOrder()->first();
        $season = DB::table('seasons')->inRandomOrder()->first();

        return [
            'course_id' => $course->id,
            'classroom_id' => $classroom->id,
            'teacher_id' => $teacher->id,
            'season' =>$season->id,
        ];
    }
}

