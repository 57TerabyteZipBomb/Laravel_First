<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {

        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->dateTimeBetween('-17 years', '-15 years')->format('Y-m-d'),
            'classroom_id' => Classroom::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
        ];
    }
}