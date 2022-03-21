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
            $table->string('nombre', 30)->comment('Nombre');
            $table->string('primer_apellido', 30)->comment('Primer apellido');
            $table->string('segundo_apellido', 30)->comment('Segundo apellido');
            $table->enum('sexo', ['femenino', 'masculino', 'prefiero no decirlo'])->comment('Sexo');
            $table->string('email',50)->unique()->comment('Correo electrónico del usuario');
            $table->enum('perfil', ['administrador','comprador', 'vendedor', 'socio'])->comment('Perfil');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->rememberToken();
            $table->enum('estatus', ['activo', 'inactivo'])->comment('Estatus');
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
