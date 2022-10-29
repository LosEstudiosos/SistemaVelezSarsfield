<?php

namespace Database\Seeders;

use App\Models\asignatura;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Música';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Artes Visuales';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Matemática';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Lengua y literatura';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Formación Ética y Ciudadana';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Educación Física';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Lengua Extranjera';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Educación tecnológica';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Historia';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Geografía';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Biología';
        $Asignatura->save();

        $Asignatura = new asignatura();
        $Asignatura->asignatura = 'Física y Química';
        $Asignatura->save();
    }
}
