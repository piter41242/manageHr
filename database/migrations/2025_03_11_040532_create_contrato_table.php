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
        Schema::create('contrato', function (Blueprint $table) {
            $table->integer('idContrato')->primary();
            $table->tinyInteger('estado');
            $table->date('fechaIngreso');
            $table->date('fechaFinal')->nullable();
            $table->string('documento', 100);
            $table->integer('tipoContratoId')->index('fk_tipocontratoid_contrato');
            $table->integer('numDocumento')->index('fk_numdocumento_contrato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato');
    }
};
