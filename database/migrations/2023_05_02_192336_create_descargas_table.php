<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descargas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre')->nullable();

            $table->foreignId('id_tramite')
            ->nullable()
            ->constrained('tramites')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_servicio')
            ->nullable()
            ->constrained('servicios')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descargas');
    }
}
