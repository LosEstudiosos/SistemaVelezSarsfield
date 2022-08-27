<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaActaReunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema_acta_reunion', function (Blueprint $table) {
            $table->unsignedBigInteger('acta_reunion_id')->nullable();
            $table->unsignedBigInteger('tema_acta_id')->nullable();

            $table->foreign('acta_reunion_id')
                    ->references('id')
                    ->on('actas_reuniones')
                    ->onDelete('set null');
            $table->foreign('tema_acta_id')
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
        Schema::dropIfExists('tema_acta_reunion');
    }
}
