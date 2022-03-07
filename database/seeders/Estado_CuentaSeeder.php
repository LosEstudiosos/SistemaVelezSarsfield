<?php

namespace Database\Seeders;

use App\Models\Estado_Cuenta;
use Illuminate\Database\Seeder;

class Estado_CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new Estado_Cuenta();
        $estado->estado = "Activada";
        $estado2 = new Estado_Cuenta();
        $estado2->estado = "Desactivada";
        $estado3 = new Estado_Cuenta();
        $estado3->estado = "En Revision";

        $estado->save();
        $estado2->save();
        $estado3->save();        
        //Estado_Cuenta::factory(10)->create();
    }
}
