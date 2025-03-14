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
        Schema::table('hojasvida', function (Blueprint $table) {
            $table->foreign(['usuarioNumDocumento'], 'fk_hojasvida_usuarios')->references(['numDocumento'])->on('usuarios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hojasvida', function (Blueprint $table) {
            $table->dropForeign('fk_hojasvida_usuarios');
        });
    }
};
