<?php

namespace Database\Seeders;

use App\Models\Tipo_recordatorio;
use Illuminate\Database\Seeder;

class Tipo_recordatorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo_recordatorio::factory(1)->create();
        
        $Tipo_recordatorio = new Tipo_recordatorio();
        $Tipo_recordatorio->tipo = 'Entrevista';
        $Tipo_recordatorio->eventColor = 'blue';
        $Tipo_recordatorio->save();

        $Tipo_recordatorio = new Tipo_recordatorio();
        $Tipo_recordatorio->tipo = 'Examen';
        $Tipo_recordatorio->eventColor = 'red';
        $Tipo_recordatorio->save();

        $Tipo_recordatorio = new Tipo_recordatorio();
        $Tipo_recordatorio->tipo = 'Reunion de centro de estudiantes';
        $Tipo_recordatorio->eventColor = 'yellow';
        $Tipo_recordatorio->save();

        $Tipo_recordatorio = new Tipo_recordatorio();
        $Tipo_recordatorio->tipo = 'Reunion de cooperadora';
        $Tipo_recordatorio->eventColor = 'green';
        $Tipo_recordatorio->save();

        $Tipo_recordatorio = new Tipo_recordatorio();
        $Tipo_recordatorio->tipo = 'Reunion de padres';
        $Tipo_recordatorio->eventColor = 'orange';
        $Tipo_recordatorio->save();
        


    }
}
