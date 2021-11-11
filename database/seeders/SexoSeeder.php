<?php

namespace Database\Seeders;

use App\Models\Sexo;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexo = new Sexo();
        $sexo->sexo = "Desconocido";
        $sexo2 = new Sexo();
        $sexo2->sexo = "Masculino";
        $sexo3 = new Sexo();
        $sexo3->sexo = "Femenino";
        $sexo4 = new Sexo();
        $sexo4->sexo = "Prefiero no decirlo";

        $sexo->save();
        $sexo2->save();
        $sexo3->save(); 
        $sexo4->save();       
        //Sexo::factory(10)->create();
    }
}
