<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libretas', function (Blueprint $table) {
            $table->double('calificacion');
            $table->year('ciclo_lectivo');

            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->unsignedBigInteger('instancia_id');

            $table->primary(['alumno_id','asignatura_id']);

            $table->foreign('alumno_id')
                    ->references('id')
                    ->on('alumnos')
                    ->onDelete('cascade');

            $table->foreign('asignatura_id')
                    ->references('id')
                    ->on('asignaturas')
                    ->onDelete('cascade'); 

            $table->foreign('instancia_id')
                    ->references('id')
                    ->on('instancias')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('libretas');
    }
}
