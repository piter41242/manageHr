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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_crearUsuario`(
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
    INSERT INTO usuarios (
        numDocumento,
        primerNombre,
        segundoNombre,
        primerApellido,
        segundoApellido,
        clave,
        fechaNac,
        numHijos,
        contactoEmergencia,
        numContactoEmergencia,
        correo,
        direccion,
        telefono,
        nacionalidadId,
        epsCodigo,
        generoId,
        tipoDocumentoId,
        estadoCivil,
        pensionesCodigo
        
    ) VALUES (
        numDocumento,
        primerNombre,
        segundoNombre,
        primerApellido,
        segundoApellido,
        AES_ENCRYPT('clave1', 'my_secret_key'),
        fechanacimiento,
        numHijos,
        contactoemer,
        numcontacto,
        correo,
        direccion,
        telefono,
        nacionalidad,
        codigoEPS,
        genero,
        tipoDocumento,
        estadoCivil,
        pensionescodigo
    );
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS pr_crearUsuario");
    }
};
