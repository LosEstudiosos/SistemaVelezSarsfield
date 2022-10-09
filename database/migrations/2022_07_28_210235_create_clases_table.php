<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->string('ciclo_lectivo',45);
            
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('curso_id');

            $table->primary(['alumno_id','curso_id']);

            $table->foreign('alumno_id')
                    ->references('id')
                    ->on('alumnos')
                    ->onDelete('cascade');

            $table->foreign('curso_id')
                    ->references('id')
                    ->on('cursos')
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
        Schema::dropIfExists('clases');
    }
}
