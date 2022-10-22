<?php

namespace Database\Seeders;

use App\Models\temas_acta;
use Illuminate\Database\Seeder;

class Temas_actaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        temas_acta::factory(6)->create();
    }
}
