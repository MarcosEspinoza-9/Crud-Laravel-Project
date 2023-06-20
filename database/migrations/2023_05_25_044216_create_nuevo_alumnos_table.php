<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nuevo_alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 10) ->unique();//atributo unico
            $table->string('nombre', 120);
            $table->date('fechaNacimiento');
            $table->string('telefono', 20);
            $table->string('correoElectronico', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nuevo_alumnos');
    }
};
