<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $student = DB::table('students')->inRandomOrder()->first();
        $lesson = DB::table('lessons')->inRandomOrder()->first();
        return [
            'student_id' => $student->id,
            'lesson' =>$lesson->id,
            'price' => rand(1200, 2000),
        ];
    }
}
