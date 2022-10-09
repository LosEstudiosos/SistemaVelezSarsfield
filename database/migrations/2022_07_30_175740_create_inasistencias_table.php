<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInasistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inasistencias', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->tinyInteger('justificada?');
            $table->tinyInteger('firmada?');

            $table->unsignedBigInteger('preceptore_id');
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('tipo_inasistencia_id');

            $table->foreign('preceptore_id')
                    ->references('id')
                    ->on('preceptores')
                    ->onDelete('cascade');

            $table->foreign('alumno_id')
                    ->references('id')
                    ->on('alumnos')
                    ->onDelete('cascade');

            $table->foreign('tipo_inasistencia_id')
                    ->references('id')
                    ->on('tipo_inasistencias')
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
        Schema::dropIfExists('inasistencias');
    }
}
