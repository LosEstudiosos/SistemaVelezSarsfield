<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'usuario' => $this->faker->userName(),
            'password' => 'pass',
            'id_estado_cuenta' => $this->faker->randomElement([1,2,3])
        ];
    }
}
