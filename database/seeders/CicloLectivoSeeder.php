<?php

namespace Database\Seeders;

use App\Models\CicloLectivo;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CicloLectivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anio = new CicloLectivo();
        $anio->anio = '2020';
        $anio->save();

        $anio = new CicloLectivo();
        $anio->anio = '2021';
        $anio->save();

        $anio = new CicloLectivo();
        $anio->anio = '2022';
        $anio->save();

        $anio = new CicloLectivo();
        $anio->anio = '2023';
        $anio->save();
        
        /* $diff = Carbon::parse(now())->year-2000; */
        /* $anio2 = new CicloLectivo();
        $anio2->anio = $diff;
        $anio2->save(); */
        
        /* CicloLectivo::factory($diff)->create(); */
    }
}
