<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGarantiaHPCamposToEquiposLogTable extends Migration
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
        Schema::table('equipos_logs', function (Blueprint $table) {
            $table->string("codigo_contable")->nullable();
            $table->string("hp_warrantyLevel")->nullable();
            $table->string("hp_endDate")->nullable();
            $table->string("hp_displaySerialNumber")->nullable();
            $table->string("hp_modelNumber")->nullable();
            $table->string("hp_countryOfPurchase")->nullable();
            $table->string("hp_newProduct_seriesName")->nullable();
            $table->string("hp_newProduct_imageUrl")->nullable();
            $table->string("hp_warrantyResultRedirectUrl")->nullable();
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
            //
        });
    }
}
