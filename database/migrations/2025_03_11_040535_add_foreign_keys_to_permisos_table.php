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
        Schema::table('permisos', function (Blueprint $table) {
            $table->foreign(['contratoId'], 'fk_ContratoId_permisos')->references(['idContrato'])->on('contrato')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['tipoPermisoId'], 'fk_tipoPermiso_permisos')->references(['idTipoPermiso'])->on('tipopermiso')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permisos', function (Blueprint $table) {
            $table->dropForeign('fk_ContratoId_permisos');
            $table->dropForeign('fk_tipoPermiso_permisos');
        });
    }
};
