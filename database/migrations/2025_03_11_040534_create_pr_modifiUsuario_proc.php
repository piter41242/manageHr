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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_modifiUsuario`(
    IN numDocumento INT,
    IN primerNombre VARCHAR(30),
    IN segundoNombre VARCHAR(30),
    IN primerApellido VARCHAR(30),
    IN segundoApellido VARCHAR(30),
    IN clave VARBINARY(200),
    IN fechanacimiento DATE,
    IN numHijos TINYINT,
    IN contactoemer VARCHAR(30),
    IN numcontacto INT,
    IN correo VARCHAR(45),
    IN direccion VARCHAR(45),
    IN telefono INT,
    IN nacionalidad INT,
    IN codigoEPS CHAR(6),
    IN genero INT,
    IN tipoDocumento INT,
    IN estadoCivil INT,
    IN pensionescodigo CHAR(6)
)
BEGIN
    UPDATE usuarios AS u
        SET u.primerNombre = primerNombre,
        u.segundoNombre = segundoNombre,
        u.primerApellido = primerApellido,
        u.segundoApellido = segundoApellido,
        u.clave = clave,
        u.fechaNac = fechanacimiento,
        u.numHijos = numHijos,
        u.contactoEmergencia = contactoemer,
        u.numContactoEmergencia = numcontacto,
        u.correo = correo,
        u.direccion = direccion,
        u.telefono = telefono,
        u.nacionalidadId = nacionalidad,
        u.epsCodigo = codigoEPS,
        u.generoId = genero,
        u.tipoDocumentoId = tipoDocumento,
        u.estadoCivilId = estadoCivil,
        u.pensionesCodigo = pensionescodigo
    
		WHERE u.numDocumento = numDocumento;
    
    
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS pr_modifiUsuario");
    }
};
