<?php

namespace Database\Factories;

use App\Models\Nacionalidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class NacionalidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */    
    protected $model = Nacionalidad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nacionalidad = substr($this->faker->unique->country(),0,50);
        $nomenclatura = substr($this->faker->unique->countryCode(),0,5);
        return [
            'nacionalidad' => $nacionalidad,
            'nomenclatura' => $nomenclatura
        ];
    }
}
