<?php

namespace Database\Seeders;

use App\Models\MarcadorMensajerias;
use Faker\Provider\HtmlLorem;
use Illuminate\Database\Seeder;

class MarcadorMensajeriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marker = new MarcadorMensajerias();
        $marker->posicion = "Bandeja de Entrada";
        $marker2 = new MarcadorMensajerias();
        $marker2->posicion = "Bandeja de Salida";
        $marker3 = new MarcadorMensajerias();
        $marker3->posicion = "Borradores";
        $marker4 = new MarcadorMensajerias();
        $marker4->posicion = "Papelera";
        $marker5 = new MarcadorMensajerias();
        $marker5->posicion = "Borradores Receptor";

        $marker->save();
        $marker2->save();
        $marker3->save();
        $marker4->save();
        $marker5->save();
    }
}