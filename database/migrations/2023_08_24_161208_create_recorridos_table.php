<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecorridosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorridos', function (Blueprint $table) {
            $table->id();
            $table->string('sindicato');
            $table->string('línea');
            $table->string('paradaInicial');
            $table->string('RecorridoIda');
            $table->string('paradaFinal');
            $table->string('recorridoVuelta');

            $table->foreignId('id_distrito')
            ->nullable()
            ->constrained('distritos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

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
        Schema::dropIfExists('recorridos');
    }
}
