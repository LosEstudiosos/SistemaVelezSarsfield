<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajerias', function (Blueprint $table) {
            $table->id();

            $table->string('titulo',45);
            $table->text('cuerpo');

            $table->unsignedBigInteger('tipos_mensajeria_id');
            $table->unsignedBigInteger('respuesta_id')->nullable();
            $table->unsignedBigInteger('user_emisor_id');
            $table->unsignedBigInteger('user_receptor_id');

            $table->foreign('tipos_mensajeria_id')
                    ->references('id')
                    ->on('tipos_mensajerias')
                    ->onDelete('cascade');

            $table->foreign('respuesta_id')
                    ->references('id')
                    ->on('mensajerias')
                    ->onDelete('cascade');

            $table->foreign('user_emisor_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('user_receptor_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('mensajerias');
    }
}
