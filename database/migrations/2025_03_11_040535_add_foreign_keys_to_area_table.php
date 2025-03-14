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
        Schema::table('area', function (Blueprint $table) {
            $table->foreign(['contratoId'], 'fk_contratoId_area')->references(['idContrato'])->on('contrato')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['postulacionesId'], 'fk_postulacionesId_area')->references(['idPostulaciones'])->on('postulaciones')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('area', function (Blueprint $table) {
            $table->dropForeign('fk_contratoId_area');
            $table->dropForeign('fk_postulacionesId_area');
        });
    }
};
