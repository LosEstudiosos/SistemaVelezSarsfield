<?php

namespace Database\Seeders;

use App\Models\TiposMensajerias;
use Illuminate\Database\Seeder;

class TiposMensajeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t_mensaje = new TiposMensajerias();
        $t_mensaje->tipo = "Mensaje";
        $t_mensaje2 = new TiposMensajerias();
        $t_mensaje2->tipo = "Recordatorio";
        $t_mensaje3 = new TiposMensajerias();
        $t_mensaje3->tipo = "Reunion";

        $t_mensaje->save();
        $t_mensaje2->save();
        $t_mensaje3->save(); 
    }
}
