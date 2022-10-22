<?php

namespace Database\Seeders;

use App\Models\Mensajeria;
use Illuminate\Database\Seeder;

class MensajeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensajeria::factory(300)->create();
    }
}
