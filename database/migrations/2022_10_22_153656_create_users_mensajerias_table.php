<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersMensajeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_mensajerias', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('mensajeria_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('marcador_id');
            $table->boolean('leido')->nullable()->default(false);
            $table->boolean('destacado')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('mensajeria_id')
                    ->references('id')
                    ->on('mensajerias')
                    ->onDelete('cascade');


            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');


            $table->foreign('marcador_id')
                    ->references('id')
                    ->on('marcador_mensajerias')
                    ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_mensajeria');
    }
}
