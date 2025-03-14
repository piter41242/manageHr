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
        Schema::create('permisos', function (Blueprint $table) {
            $table->integer('idPermiso', true);
            $table->text('descrip');
            $table->date('fechaInicio');
            $table->date('fechaFinal')->nullable();
            $table->tinyInteger('estado');
            $table->integer('tipoPermisoId')->index('fk_tipopermiso_permisos');
            $table->integer('contratoId')->index('fk_contratoid_permisos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
