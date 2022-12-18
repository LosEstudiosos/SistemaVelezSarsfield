<?php

namespace Database\Seeders;

use App\Models\alumno;
use App\Models\clase;
use App\Models\User;
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

        $UserIds = User::UserIDAlumno()->get();
        foreach($UserIds as $userID){
            $Alumno = new alumno();
            $Alumno->fecha_inscripcion = now();
            $Alumno->ciclo_lectivo_id = 1;
            $Alumno->user_id = $userID->id;
            $Alumno->save();
            $clase = new clase();
            $clase->alumno_id = $Alumno->id;
            $clase->curso_id = 1;
            $clase->save();
        }
        /*
        $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '23543454';
        $Alumno->user_id = 3;
        $Alumno->save();

        $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '23235654';
        $Alumno->user_id = 4;
        $Alumno->save(); 

         $Alumno = new alumno();
        $Alumno->fecha_inscripcion = '2022-3-14';
        $Alumno->user_id = 1;
        $Alumno->save(); */

        /* alumno::factory(50)->create(); */
    }
}

