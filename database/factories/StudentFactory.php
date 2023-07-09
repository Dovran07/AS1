<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.07.2023
 * Time: 10:55
 */

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class StudentFactory extends Factory
{

    public function definition(): array
    {
        $course = DB::table('courses')->inRandomOrder()->first();
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        $teacher = DB::table('teachers')->inRandomOrder()->first();
        $season = DB::table('seasons')->inRandomOrder()->first();
        $lesson = DB::table('lessons')->inRandomOrder()->first();
        $registration = DB::table('registrations')->inRandomOrder()->first();
        return [
            'course_id' => $course->id,
            'classroom_id' => $classroom->id,
            'season_id' =>$season->id,
            'teacher_id' => $teacher->id,
            'lesson_id' =>$lesson->id,
            'registration_id' =>$registration->id,
            'price' => rand(1200, 2000),
        ];
    }

}