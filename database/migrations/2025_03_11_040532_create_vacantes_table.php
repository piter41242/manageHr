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
        Schema::create('vacantes', function (Blueprint $table) {
            $table->integer('idVacantes', true);
            $table->string('nomVacante', 30);
            $table->text('descripVacante');
            $table->float('salario');
            $table->string('expMinima', 45);
            $table->string('cargoVacante', 45);
            $table->integer('catVacId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacantes');
    }
};
