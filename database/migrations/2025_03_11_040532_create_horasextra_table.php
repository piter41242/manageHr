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
        Schema::create('horasextra', function (Blueprint $table) {
            $table->integer('idHorasExtra', true);
            $table->text('descrip');
            $table->date('fecha');
            $table->integer('nHorasExtra');
            $table->integer('tipoHorasid')->index('fk_horasextra_tipohoras');
            $table->integer('contratoId')->index('fk_contratoid_horasextra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horasextra');
    }
};
