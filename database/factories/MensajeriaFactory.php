<?php

namespace Database\Factories;

use App\Models\Mensajeria;
use App\Models\TiposMensajerias;
use App\Models\User;
use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MensajeriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mensajeria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = substr($this->faker->word(),0,45);
        $state = $this->faker->randomElement([0,1]);
        return [
            'titulo' => $title,
            'cuerpo' => $this->faker->unique()->email,
            'tipos_mensajeria_id' => TiposMensajerias::all()->random()->id,
            //'respuesta_id' => $this->faker->randomElement([null, Mensajerias::all()->random()->id]),
            'user_emisor_id' => User::all()->random()->id,
            'user_receptor_id' => User::all()->random()->id,
            'leido' => $this->faker->randomElement([0,1]),
            'destacado' => $this->faker->randomElement([0,1]),
            'borrador' => $state,
            'eliminado' => !$state
        ];
    }
}
