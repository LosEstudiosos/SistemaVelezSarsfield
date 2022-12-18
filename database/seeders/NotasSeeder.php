<?php

namespace Database\Seeders;

use App\Http\Livewire\Notas;
use App\Models\libreta;
use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3; $i++) {
            for ($j=1; $j <= 12; $j++) {
                $nota = new libreta();
                $nota->calificacion = rand(4,10);
                $nota->alumno_id = 1;
                $nota->asignatura_id = $j;
                $nota->ciclo_lectivo_id = 3;
                $nota->instancia_id = $i;
                $nota->save();
            }
        }
    }
}
