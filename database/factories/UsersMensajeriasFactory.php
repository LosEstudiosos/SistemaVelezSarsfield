<?php

namespace Database\Factories;

use App\Models\MarcadorMensajerias;
use App\Models\Mensajeria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class UsersMensajeriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userID = User::all()->random()->id;
        $mensajeria = Mensajeria::all()->random();
        $leido = $mensajeria->user_autor_id == $userID;
        return [
            'mensajeria_id' => $mensajeria->id,
            'user_id' => $userID,
            'marcador_id' => MarcadorMensajerias::all()->random()->id,
            'leido' => $leido,
            'destacado' => $this->faker->randomElement([0,1]),
        ];
    }
}
