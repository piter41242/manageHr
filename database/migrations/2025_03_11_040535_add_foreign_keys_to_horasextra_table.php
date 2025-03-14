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
        Schema::table('horasextra', function (Blueprint $table) {
            $table->foreign(['contratoId'], 'fk_contratoId_horasextra')->references(['idContrato'])->on('contrato')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['tipoHorasid'], 'fk_horasextra_tipohoras')->references(['idTipoHoras'])->on('tipohoras')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horasextra', function (Blueprint $table) {
            $table->dropForeign('fk_contratoId_horasextra');
            $table->dropForeign('fk_horasextra_tipohoras');
        });
    }
};
