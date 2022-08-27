<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    {
        $usuario = new User();
        $usuario -> name = 'Admin';
        $usuario -> apellido = '';
        $usuario -> email = 'admin@example.com';
        //$usuario -> usuario = 'admin';
        $usuario -> password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';//password
        $usuario -> estado_cuenta_id = 1;
        $usuario -> remember_token = 'fUgan6wyRjcUJhr0n9ciQfGYe787HjZM1LSUrpNr0967a4TN9jr3l5hpRISf';
        $usuario -> email_verified_at = now();
        $usuario -> save();

        User::factory(50)->create();
    }
    }
}