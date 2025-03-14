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
        Schema::create('pazysalvo', function (Blueprint $table) {
            $table->integer('idPazSalvo', true);
            $table->text('descrip');
            $table->string('firma', 45);
            $table->integer('contratoId')->index('fk_contratoid_pazysalvo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pazysalvo');
    }
};
