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
        Schema::create('usuarioshasrol', function (Blueprint $table) {
            $table->char('estado', 10);
            $table->integer('usuarioNumDocumento')->index('fk_usuarios_rol');
            $table->integer('rolId')->nullable()->index('fk_rol_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarioshasrol');
    }
};
