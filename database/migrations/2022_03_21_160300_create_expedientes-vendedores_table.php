<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes-ventas', function(Blueprint $table){
            $table->smallIncrements('id');
            $table->unsignedMediumInteger('vendedor_id');
            $table->string('rfc', 16);
            $table->string('curp',20);
            $table->string('clave_elector',24);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes-ventas');
    }
};
