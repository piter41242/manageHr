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
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->integer('idVacaciones', true);
            $table->text('descrip');
            $table->string('archivo', 45);
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->integer('contratoId')->index('fk_contratoid_vacaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacaciones');
    }
};
