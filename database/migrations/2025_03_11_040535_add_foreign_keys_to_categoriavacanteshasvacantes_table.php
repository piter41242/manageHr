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
        Schema::table('categoriavacanteshasvacantes', function (Blueprint $table) {
            $table->foreign(['categoriaVacantesId'], 'fk_categoriavacantes_vacantes')->references(['idCatVac'])->on('categoriavacantes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['vacantesid'], 'fk_vacantes_categoriavacantes')->references(['idVacantes'])->on('vacantes')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categoriavacanteshasvacantes', function (Blueprint $table) {
            $table->dropForeign('fk_categoriavacantes_vacantes');
            $table->dropForeign('fk_vacantes_categoriavacantes');
        });
    }
};
