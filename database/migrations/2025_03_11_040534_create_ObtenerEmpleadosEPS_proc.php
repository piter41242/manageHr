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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerEmpleadosEPS`()
BEGIN
    SELECT u.numDocumento, u.primerNombre, u.primerApellido, e.nombreEPS
    FROM usuarios u
    INNER JOIN eps e ON u.epsCodigo = e.codigoEPS;
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS ObtenerEmpleadosEPS");
    }
};
