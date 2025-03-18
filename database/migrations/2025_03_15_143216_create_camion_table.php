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
        Schema::create('camion', function (Blueprint $table) {
            $table->id('id_camion');
            $table->string('placa', 8);
            $table->string('codig_interno', 8);
            $table->foreignId('id_transporte')->constrained('transportes')->onDelete('cascade');
            $table->string('color', 35);
            $table->date('modelo');
            $table->string('capacidad_toneladas', 45);
            $table->timestamps();
            $table->foreignId('id_marca')->constrained('marca')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camion');
    }
};
