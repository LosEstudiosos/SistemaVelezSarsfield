<?php

namespace Database\Seeders;

use App\Models\instancia;
use Illuminate\Database\Seeder;

class InstanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Instancia = new Instancia();
        $Instancia->instancia = 'Primer Trimestre';
        $Instancia->save();
        
        $Instancia = new Instancia();
        $Instancia->instancia = 'Segundo Trimestre';
        $Instancia->save();

        $Instancia = new Instancia();
        $Instancia->instancia = 'Tercer Trimestre';
        $Instancia->save();

        $Instancia = new instancia();
        $Instancia->instancia = 'Diciembre';
        $Instancia->save();

        $Instancia = new Instancia();
        $Instancia->instancia = 'Febrero';
        $Instancia->save();
    }
}
