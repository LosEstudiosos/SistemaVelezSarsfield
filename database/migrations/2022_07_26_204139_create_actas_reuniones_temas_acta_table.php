<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActasReunionesTemasActaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas_reuniones_temas_acta', function (Blueprint $table) {
            $table->unsignedBigInteger('actas_reuniones_id')->nullable();
            $table->unsignedBigInteger('temas_acta_id')->nullable();

            $table->foreign('actas_reuniones_id')
                    ->references('id')
                    ->on('actas_reuniones')
                    ->onDelete('set null');
            $table->foreign('temas_acta_id')
                    ->references('id')
                    ->on('temas_actas')
                    ->onDelete('set null');

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
        Schema::dropIfExists('actas_reuniones_temas_acta');
    }
}
