<?php

namespace Database\Seeders;

use App\Models\alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '23545654';
        $Alumno->user_id = 2;
        $Alumno->save();

        $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '23543454';
        $Alumno->user_id = 3;
        $Alumno->save();

        $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '23235654';
        $Alumno->user_id = 4;
        $Alumno->save(); */

        $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '2022-3-14';
        $Alumno->user_id = 1;
        $Alumno->save();

        /* alumno::factory(50)->create(); */
    }
}

