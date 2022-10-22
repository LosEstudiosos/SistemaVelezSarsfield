<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Curso = new curso();
        $Curso->anio = '1';
        $Curso->division = 'A';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '1';
        $Curso->division = 'B';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '1';
        $Curso->division = 'C';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '1';
        $Curso->division = 'D';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '1';
        $Curso->division = 'E';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '2';
        $Curso->division = 'A';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '2';
        $Curso->division = 'B';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '2';
        $Curso->division = 'C';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '2';
        $Curso->division = 'D';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '2';
        $Curso->division = 'E';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '3';
        $Curso->division = 'A';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '3';
        $Curso->division = 'B';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '3';
        $Curso->division = 'C';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '3';
        $Curso->division = 'D';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '4';
        $Curso->division = 'A';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '4';
        $Curso->division = 'B';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '4';
        $Curso->division = 'C';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '5';
        $Curso->division = 'A';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '5';
        $Curso->division = 'B';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '5';
        $Curso->division = 'C';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '6';
        $Curso->division = 'A';
        $Curso->save();

        $Curso = new curso();
        $Curso->anio = '6';
        $Curso->division = 'B';
        $Curso->save();
    }
}
