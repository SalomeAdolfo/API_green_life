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
        Schema::create('datos-bancarios', function(Blueprint $table){
            $table->smallIncrements('id');
            $table->string('numero', 30);
            $table->date('fecha_expiración');
            $table->string('ccv');
            $table->string('banco',45);
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
