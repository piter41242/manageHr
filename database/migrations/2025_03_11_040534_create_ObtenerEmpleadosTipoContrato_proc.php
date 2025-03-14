<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerEmpleadosTipoContrato`()
BEGIN
    SELECT u.numDocumento, u.primerNombre, u.primerApellido, tc.nomTipoContrato
    FROM usuarios u
    INNER JOIN contrato c ON u.numDocumento = c.idContrato
    INNER JOIN tipoContrato tc ON c.tipoContratoId = tc.idTipoContrato;
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS ObtenerEmpleadosTipoContrato");
    }
};
