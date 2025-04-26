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
        Schema::create('pelicula', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 1000);
            $table->string('genero', 1000);
            $table->string('puntuacion', 1000);
            $table->string('actor_principal', 1000);
            $table->string('actor_secundario', 1000);
            $table->date('fecha_publicacion');
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
        Schema::dropIfExists('pelicula');
    }
};
