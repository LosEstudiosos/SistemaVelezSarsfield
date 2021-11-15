<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Se llama a las clases Seeders para autogenerar los datos
        $this->call(RolSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(Estado_CuentaSeeder::class);
        $this->call(NacionalidadSeeder::class);


        $this->call(UsuarioSeeder::class);
    }
}
