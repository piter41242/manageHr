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
        Schema::table('contrato', function (Blueprint $table) {
            $table->foreign(['numDocumento'], 'fk_numDocumento_contrato')->references(['numDocumento'])->on('usuarios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['tipoContratoId'], 'fk_tipoContratoId_contrato')->references(['idTipoContrato'])->on('tipocontrato')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contrato', function (Blueprint $table) {
            $table->dropForeign('fk_numDocumento_contrato');
            $table->dropForeign('fk_tipoContratoId_contrato');
        });
    }
};
