<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario();
        $usuario -> nombre = 'Admin';
        $usuario -> apellido = '';
        $usuario -> email = 'admin@example.com';
        $usuario -> usuario = 'admin';
        $usuario -> password = 'admin';
        $usuario -> id_estado_cuenta = 1;
        $usuario -> save();

        Usuario::factory(50)->create();

    }
}
