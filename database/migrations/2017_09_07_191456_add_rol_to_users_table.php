<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolToUsersTable extends Migration
{

    public function __construct()
    {
        \Illuminate\Support\Facades\DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->enum('rol', ['usuario','administrador','system','encargado_activos_fijos','registrado'])->change();
            DB::statement("ALTER TABLE `users` CHANGE `rol` `rol` ENUM('usuario','administrador','system','encargado_activos_fijos','registrado') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('rol', ['system', 'administrator']);
        });
    }
}
