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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_barras');
            $table->string('ruta_pdf');
            $table->unsignedBigInteger('id_pasajero');
            $table->string('clase');
            $table->foreign('id_pasajero')
            ->references('id')->on('pasajeros')->onDelete('cascade');
            $table->unsignedBigInteger('id_asiento');
            $table->foreign('id_asiento')
            ->references('id')->on('asientos')->onDelete('cascade');

        });
    }
   // protected $fillable= ['id_compra','codigo_barras','ruta_pdf','id_pasajero','id_asiento'];


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
