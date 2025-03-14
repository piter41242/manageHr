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
        Schema::table('categoriavacanteshasusuario', function (Blueprint $table) {
            $table->foreign(['categoriaVacantesId'], 'fk_categoriavacantes_usuarios')->references(['idCatVac'])->on('categoriavacantes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['usuarioNumDocumento'], 'fk_usuarios_categoriavacantes')->references(['numDocumento'])->on('usuarios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categoriavacanteshasusuario', function (Blueprint $table) {
            $table->dropForeign('fk_categoriavacantes_usuarios');
            $table->dropForeign('fk_usuarios_categoriavacantes');
        });
    }
};
