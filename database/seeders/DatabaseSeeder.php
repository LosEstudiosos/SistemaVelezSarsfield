<?php

namespace Database\Seeders;

use App\Models\Tipo_recordatorio;
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
        \App\Models\Prueba::factory(100)->create();

        //Se llama a las clases Seeders para autogenerar los datos
        $this->call(Estado_CuentaSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TiposMensajeriaSeeder::class);
        $this->call(MarcadorMensajeriasSeeder::class);
        $this->call(MensajeriaSeeder::class);
        $this->call(UsersMensajeriasSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(NacionalidadSeeder::class);
        $this->call(Temas_actaSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(InstanciaSeeder::class);
        $this->call(Tipo_recordatorioSeeder::class);
    }
}
