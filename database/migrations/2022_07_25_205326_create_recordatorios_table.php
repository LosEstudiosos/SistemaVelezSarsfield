<?php

use App\Models\Tipo_recordatorio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',45);
            $table->string('descripcion',255);
            $table->date('fecha');

            $table->unsignedBigInteger('tipo_recordatorio_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('tipo_recordatorio_id')
                    ->references('id')
                    ->on('tipo_recordatorios')
                    ->onDelete('cascade');

            $table->foreign('user_id')
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
        Schema::dropIfExists('recordatorios');
    }
}
