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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuarioConClave`(
    IN p_numDocumento INT,
    IN p_primerNombre VARCHAR(30),
    IN p_segundoNombre VARCHAR(30),
    IN p_primerApellido VARCHAR(30),
    IN p_segundoApellido VARCHAR(30),
    IN p_clave VARCHAR(255),
    IN p_fechaNac DATE,
    IN p_numHijos TINYINT(2),
    IN p_contactoEmergencia VARCHAR(30),
    IN p_numContactoEmergencia INT,
    IN p_correo VARCHAR(45),
    IN p_direccion VARCHAR(45),
    IN p_telefono INT,
    IN p_nacionalidadId INT,
    IN p_epsCodigo CHAR(6),
    IN p_generoId INT,
    IN p_tipoDocumentoId INT,
    IN p_estadoCivilId INT,
    IN p_pensionesCodigo CHAR(6),
    OUT p_claveEncriptada VARBINARY(200)
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
        estadoCivilId,
        pensionesCodigo
    ) VALUES (
        p_numDocumento,
        p_primerNombre,
        p_segundoNombre,
        p_primerApellido,
        p_segundoApellido,
        AES_ENCRYPT(p_clave, 'my_secret_key'),
        p_fechaNac,
        p_numHijos,
        p_contactoEmergencia,
        p_numContactoEmergencia,
        p_correo,
        p_direccion,
        p_telefono,
        p_nacionalidadId,
        p_epsCodigo,
        p_generoId,
        p_tipoDocumentoId,
        p_estadoCivilId,
        p_pensionesCodigo
    );

    -- Obtener la clave encriptada recién insertada
    SELECT clave INTO p_claveEncriptada FROM usuarios WHERE numDocumento = p_numDocumento;
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS InsertarUsuarioConClave");
    }
};
