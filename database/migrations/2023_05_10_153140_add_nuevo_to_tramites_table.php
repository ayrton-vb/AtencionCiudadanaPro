<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNuevoToTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tramites', function (Blueprint $table) {
            //
            $table->boolean('nuevo')
            ->after('id_categoria');
            //

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tramites', function (Blueprint $table) {
            $table->dropColumn('nuevo');
            //
        });
    }
}
