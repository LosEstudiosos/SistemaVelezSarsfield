<?php

namespace Database\Factories;

use App\Models\CicloLectivo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CicloLectivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anio' => (CicloLectivo::all()->count())/* (string)((int)CicloLectivo::all()->count()+2000) */
        ];
    }
}
