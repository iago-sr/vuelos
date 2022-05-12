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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');
            $table->string('billetera');
            $table->string('numero_tarjeta');
            $table->string('caducidad_tarjeta');
            $table->string('ccv_tarjeta');
            $table->string('precio');
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
        Schema::dropIfExists('compras');
    }
};
