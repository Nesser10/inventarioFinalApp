<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpresaEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipos', function (Blueprint $table) {
                $table->string('empresa_procede1')->nullable();
        });
        $affected = DB::update('update equipos set empresa_procede1 = ?', ['Avianca Ec']);
        Schema::table('equipos', function (Blueprint $table) {
                $table->foreign('empresa_procede1')->references('empresa')->on('empresas');
        });

        Schema::table('equipos_logs', function (Blueprint $table) {
            $table->string('empresa_procede1')->nullable();
        });
        $affected = DB::update('update equipos_logs set empresa_procede1 = ?', ['Avianca Ec']);
        Schema::table('equipos_logs', function (Blueprint $table) {
            $table->foreign('empresa_procede1')->references('empresa')->on('empresas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn('empresa_procede1');
        });
        Schema::table('equipos_logs', function (Blueprint $table) {
            $table->dropColumn('empresa_procede1');
        });
    }
}
