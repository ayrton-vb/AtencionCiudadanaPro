<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDemandadoToServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servicios', function (Blueprint $table) {
            //
            $table->boolean('demandado')
            ->after('nuevo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropColumn('demandado');
            //
        });
    }
}
