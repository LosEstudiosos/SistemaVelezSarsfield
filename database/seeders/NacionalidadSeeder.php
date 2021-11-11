<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Seeder;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidad::factory(50)->create();
    }
}
