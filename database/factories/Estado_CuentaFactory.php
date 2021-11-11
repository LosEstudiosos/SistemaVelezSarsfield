<?php

namespace Database\Factories;

use App\Models\Estado_Cuenta;
use Illuminate\Database\Eloquent\Factories\Factory;

class Estado_CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */    
    protected $model = Estado_Cuenta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estado = substr($this->faker->word(),0,45);
        return [
            'estado' => $estado
        ];
    }
}
