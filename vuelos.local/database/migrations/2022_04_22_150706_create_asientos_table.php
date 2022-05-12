<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('pasaporte');
            $table->string('nacionalidad');
            $table->boolean('especial');
            $table->unsignedBigInteger('id_vuelo');
            $table->foreign('id_vuelo')
            ->references('id')->on('vuelos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asientos');
    }
};
