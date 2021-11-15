<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
            $rol = new Rol();
            $rol->rol = "Alumno";
            $rol2 = new Rol();
            $rol2->rol = "Profesor";
            $rol3 = new Rol();
            $rol3->rol = "Preceptor";
            $rol4 = new Rol();
            $rol4->rol = "Tutor";
            $rol5 = new Rol();
            $rol5->rol = "Directivo";
            $rol6 = new Rol();
            $rol6->rol = "Responsable";

            $rol->save();
            $rol2->save();
            $rol3->save();  
            $rol4->save();
            $rol5->save();
            $rol6->save();       
            //Rol::factory(10)->create();
        
    }
}
