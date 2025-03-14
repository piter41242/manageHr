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
        Schema::table('usuarioshasrol', function (Blueprint $table) {
            $table->foreign(['rolId'], 'fk_rol_usuarios')->references(['idRol'])->on('rol')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['usuarioNumDocumento'], 'fk_usuarios_rol')->references(['numDocumento'])->on('usuarios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarioshasrol', function (Blueprint $table) {
            $table->dropForeign('fk_rol_usuarios');
            $table->dropForeign('fk_usuarios_rol');
        });
    }
};
