<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tipo_recordatorio;
use Illuminate\Support\Str;

class Tipo_recordatorioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */    
    protected $model = Tipo_recordatorio::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'tipo'=>Str::random(40)
        ];
    }
}
