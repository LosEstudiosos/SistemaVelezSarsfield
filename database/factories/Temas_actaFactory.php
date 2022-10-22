<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Temas_actaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tema' => $this->faker->name(),
        ];
    }
}
