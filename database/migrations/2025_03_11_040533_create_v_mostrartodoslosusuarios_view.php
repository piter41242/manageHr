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
        DB::statement("CREATE VIEW `v_mostrartodoslosusuarios` AS select `managehr`.`usuarios`.`numDocumento` AS `numDocumento`,`managehr`.`usuarios`.`primerNombre` AS `primerNombre`,`managehr`.`usuarios`.`segundoNombre` AS `segundoNombre`,`managehr`.`usuarios`.`primerApellido` AS `primerApellido`,`managehr`.`usuarios`.`segundoApellido` AS `segundoApellido`,`managehr`.`usuarios`.`clave` AS `clave`,`managehr`.`usuarios`.`fechaNac` AS `fechaNac`,`managehr`.`usuarios`.`numHijos` AS `numHijos`,`managehr`.`usuarios`.`contactoEmergencia` AS `contactoEmergencia`,`managehr`.`usuarios`.`numContactoEmergencia` AS `numContactoEmergencia`,`managehr`.`usuarios`.`correo` AS `correo`,`managehr`.`usuarios`.`direccion` AS `direccion`,`managehr`.`usuarios`.`telefono` AS `telefono`,`managehr`.`usuarios`.`nacionalidadId` AS `nacionalidadId`,`managehr`.`usuarios`.`epsCodigo` AS `epsCodigo`,`managehr`.`usuarios`.`generoId` AS `generoId`,`managehr`.`usuarios`.`tipoDocumentoId` AS `tipoDocumentoId`,`managehr`.`usuarios`.`estadoCivilId` AS `estadoCivilId`,`managehr`.`usuarios`.`pensionesCodigo` AS `pensionesCodigo` from `managehr`.`usuarios`");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `v_mostrartodoslosusuarios`");
    }
};
