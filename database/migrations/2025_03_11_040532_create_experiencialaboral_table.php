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
        Schema::create('experiencialaboral', function (Blueprint $table) {
            $table->integer('idExperiencia', true);
            $table->string('nomEmpresa', 45);
            $table->string('nombJefe', 45);
            $table->integer('telefono');
            $table->string('cargo', 20);
            $table->text('actividades');
            $table->string('certificado', 100);
            $table->date('fechaInicio');
            $table->date('fechaFin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencialaboral');
    }
};
