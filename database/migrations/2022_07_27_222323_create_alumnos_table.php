<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();

            /* $table->string('dni',8); */
            /* $table->string('cuil',11);
            $table->date('fecha_nacimiento');
            $table->string('celular_telefono',14);
            $table->string('direccion',50);
            $table->integer('numero_direccion'); */
            $table->date('fecha_inscripcion');
            /* $table->double('inasistencias_permitidas'); */

            /* $table->unsignedBigInteger('estado_alumno_id');
            $table->unsignedBigInteger('sexo_id'); */
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ciclo_lectivo_id')->nullable();
            /* $table->unsignedBigInteger('nacionalidad_id');
            $table->unsignedBigInteger('localidade_id'); */

            /* $table->foreign('estado_alumno_id')
                    ->references('id')
                    ->on('estado_alumnos')
                    ->onDelete('cascade'); 

            $table->foreign('sexo_id')
                    ->references('id')
                    ->on('sexos')
                    ->onDelete('cascade'); */

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('ciclo_lectivo_id')
                    ->references('id')
                    ->on('ciclo_lectivos')
                    ->onDelete('cascade');

            /* $table->foreign('nacionalidad_id')
                    ->references('id')
                    ->on('nacionalidades')
                    ->onDelete('cascade');

            $table->foreign('localidade_id')
                    ->references('id')
                    ->on('localidades')
                    ->onDelete('cascade');  */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
