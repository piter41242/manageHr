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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerContratosUsuario`(IN p_numDocumento INT)
BEGIN
    SELECT u.numDocumento, u.primerNombre, u.primerApellido, c.idContrato, c.fechaIngreso, c.fechaFinal
    FROM usuarios u
    INNER JOIN contrato c ON u.numDocumento = c.idContrato
    WHERE u.numDocumento = p_numDocumento;
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS ObtenerContratosUsuario");
    }
};
