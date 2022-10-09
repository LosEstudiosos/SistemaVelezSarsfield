<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMensajeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensajerias', function (Blueprint $table) {
            $table->boolean('leido')->nullable()->after('user_receptor_id')->default(false);
            $table->boolean('destacado')->nullable()->after('leido')->default(false);
            $table->boolean('borrador')->nullable()->after('destacado')->default(false);
            $table->boolean('eliminado')->nullable()->after('borrador')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensajerias', function (Blueprint $table) {
            $table->dropColumn(['leido', 'destacado', 'borrador', 'eliminado']);
        });
    }
}
