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
        Schema::create('hojavidahasestudio', function (Blueprint $table) {
            $table->char('estadoEstudio', 10);
            $table->integer('hojaVidaId')->index('fk_hojavida_estudio');
            $table->integer('estudiosId')->index('fk_estudio_hojavida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hojavidahasestudio');
    }
};
