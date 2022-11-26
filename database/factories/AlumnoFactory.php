<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_inscripcion' => $this->faker->date('Y-m-d','now'),
            'user_id' => $this->faker->unique()->numberBetween(2,51)
        ];
    }
}
