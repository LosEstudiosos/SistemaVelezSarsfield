<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabla3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla3s', function (Blueprint $table) {
            $table->unsignedBigInteger('tabla1_id');
            $table->unsignedBigInteger('tabla2_id');

            $table->primary(['tabla1_id','tabla2_id']);

            $table->foreign('tabla1_id')
                    ->references('id')
                    ->on('tabla1s')
                    ->onDelete('cascade');

            $table->foreign('tabla2_id')
                    ->references('id')
                    ->on('tabla2s')
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
        Schema::dropIfExists('tabla3s');
    }
}
