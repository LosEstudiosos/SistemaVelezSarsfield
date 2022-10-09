<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturasCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas_cursos', function (Blueprint $table) {
            $table->id();

            $table->year('ciclo_lectivo');

            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('profesore_id');
            $table->unsignedBigInteger('asignatura_id');

            $table->foreign('curso_id')
                    ->references('id')
                    ->on('cursos')
                    ->onDelete('cascade');

            $table->foreign('profesore_id')
                    ->references('id')
                    ->on('profesores')
                    ->onDelete('cascade');

            $table->foreign('asignatura_id')
                    ->references('id')
                    ->on('asignaturas')
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
        Schema::dropIfExists('asignaturas_cursos');
    }
}
