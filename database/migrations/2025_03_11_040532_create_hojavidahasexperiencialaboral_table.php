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
        Schema::create('hojavidahasexperiencialaboral', function (Blueprint $table) {
            $table->char('estadoExperiencia', 10);
            $table->integer('hojaVidaId')->index('fk_hojavida_experiencia');
            $table->integer('experienciaLaboralId')->index('fk_experiencia_hojavida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hojavidahasexperiencialaboral');
    }
};
