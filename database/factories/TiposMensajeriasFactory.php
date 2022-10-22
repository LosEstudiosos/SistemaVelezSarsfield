<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TiposMensajerias;
use Illuminate\Support\Str;

class TipoMensajeriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */    
    protected $model = TiposMensajerias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => Str::random(50)
        ];
    }
}
