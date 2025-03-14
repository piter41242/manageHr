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
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign(['epsCodigo'], 'fk_usuario_eps')->references(['codigoEps'])->on('eps')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['estadoCivilId'], 'fk_usuario_estadocivil')->references(['idEstadoCivil'])->on('estadocivil')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['generoId'], 'fk_usuario_genero')->references(['idGenero'])->on('genero')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['nacionalidadId'], 'fk_usuario_nacionalidad')->references(['idNacionalidad'])->on('nacionalidad')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['pensionesCodigo'], 'fk_usuario_pensiones')->references(['codigoPensiones'])->on('pensiones')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['tipoDocumentoId'], 'fk_usuario_tipodedocumento')->references(['idTipoDocumento'])->on('tipodocumento')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('fk_usuario_eps');
            $table->dropForeign('fk_usuario_estadocivil');
            $table->dropForeign('fk_usuario_genero');
            $table->dropForeign('fk_usuario_nacionalidad');
            $table->dropForeign('fk_usuario_pensiones');
            $table->dropForeign('fk_usuario_tipodedocumento');
        });
    }
};
