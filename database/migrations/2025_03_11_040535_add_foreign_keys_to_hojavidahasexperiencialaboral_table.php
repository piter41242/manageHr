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
        Schema::table('hojavidahasexperiencialaboral', function (Blueprint $table) {
            $table->foreign(['experienciaLaboralId'], 'fk_experiencia_hojavida')->references(['idExperiencia'])->on('experiencialaboral')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['hojaVidaId'], 'fk_hojavida_experiencia')->references(['idHojaDeVida'])->on('hojasvida')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hojavidahasexperiencialaboral', function (Blueprint $table) {
            $table->dropForeign('fk_experiencia_hojavida');
            $table->dropForeign('fk_hojavida_experiencia');
        });
    }
};
