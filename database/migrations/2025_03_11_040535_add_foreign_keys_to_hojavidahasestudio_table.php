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
        Schema::table('hojavidahasestudio', function (Blueprint $table) {
            $table->foreign(['estudiosId'], 'fk_estudio_hojavida')->references(['idEstudios'])->on('estudios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['hojaVidaId'], 'fk_hojavida_estudio')->references(['idHojaDeVida'])->on('hojasvida')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hojavidahasestudio', function (Blueprint $table) {
            $table->dropForeign('fk_estudio_hojavida');
            $table->dropForeign('fk_hojavida_estudio');
        });
    }
};
