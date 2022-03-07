<?php

namespace Database\Factories;

use App\Models\Sexo;
use Illuminate\Database\Eloquent\Factories\Factory;

class SexoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */    
    protected $model = Sexo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sexo = substr($this->faker->word(),0,45);
        return [
            'sexo' => $sexo
        ];
    }
}
