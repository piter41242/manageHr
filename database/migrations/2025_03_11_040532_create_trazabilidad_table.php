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
        Schema::create('trazabilidad', function (Blueprint $table) {
            $table->bigInteger('idTrazabilidad', true);
            $table->dateTime('fechaModificacion');
            $table->string('iP', 100);
            $table->string('usuarioanterior', 100);
            $table->string('usuarionuevo', 100);
            $table->binary('claveAnterior');
            $table->binary('claveNueva');
            $table->integer('numDocumento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trazabilidad');
    }
};
