<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->boolean();

        return [
            'name' => fake()->name(),
            'surname' => fake()->lastName(),
            'date_of_birth'=> fake()->date(),
            'gender'=> $gender,
        ];
    }
}