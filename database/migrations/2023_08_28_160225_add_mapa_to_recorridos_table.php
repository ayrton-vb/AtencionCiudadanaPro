<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMapaToRecorridosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recorridos', function (Blueprint $table) {
            //
            $table->string('mapa')->nullable()
            ->after('id_distrito');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recorridos', function (Blueprint $table) {
            //
            $table->dropColumn('recorridos');
        });
    }
}
