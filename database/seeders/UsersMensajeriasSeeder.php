<?php

namespace Database\Seeders;

use App\Models\UserMensajerias;
use App\Models\UsersMensajerias;
use Illuminate\Database\Seeder;

class UsersMensajeriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsersMensajerias::factory(400)->create();
    }
}
