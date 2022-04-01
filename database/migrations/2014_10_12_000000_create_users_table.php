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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->comment('Nombre');
            $table->string('primer_apellido', 30)->comment('Primer apellido');
            $table->string('segundo_apellido', 30)->comment('Segundo apellido');
            $table->enum('sexo', ['Femenino', 'Masculino', 'prefiero no decirlo'])->comment('Sexo');
            $table->string('email',50)->unique()->comment('Correo electrónico del usuario');
            $table->enum('perfil', ['Comprador', 'Vendedor'])->comment('Perfil');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->rememberToken();
            $table->boolean('tipo')->default(1); //1 es cliente 0 vendedor
            $table->boolean('estado')->default(1);//1 activado 0 no activado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
