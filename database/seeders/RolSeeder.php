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

            $rol->save();
            $rol2->save();
            $rol3->save();        
            Rol::factory(10)->create();
        
    }
}
