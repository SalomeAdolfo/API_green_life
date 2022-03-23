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
        Schema::create('detalles_venta', function(Blueprint $table){
            $table->smallInteger('venta_id');
            $table->mediumInteger('producto_id');
            $table->string('cantidad',40);
            $table->string('total', 40);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles-venta');
    }
};
