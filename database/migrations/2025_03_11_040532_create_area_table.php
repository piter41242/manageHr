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
        Schema::create('area', function (Blueprint $table) {
            $table->integer('idArea', true);
            $table->string('nombreArea', 50);
            $table->string('jefePersonal', 100);
            $table->tinyInteger('estado');
            $table->integer('contratoId')->index('fk_contratoid_area');
            $table->integer('postulacionesId')->index('fk_postulacionesid_area');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area');
    }
};
