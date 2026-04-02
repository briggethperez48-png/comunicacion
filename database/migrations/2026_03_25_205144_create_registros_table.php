<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registros', function (Blueprint $datoR) {
            $datoR->id();
            $datoR->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $datoR->string('Nombre');
            $datoR->string('ApellidoPaterno');
            $datoR->string('ApellidoMaterno');
            $datoR->string('Profesion');
            $datoR->string('Institucion');
            $datoR->string('UnidadMedica');
            $datoR->string('EstadoProcedencia');
            $datoR->string('Pais');
            $datoR->string('Alcaldia');
            $datoR->integer('Edad');
            $datoR->string('Sexo');
            $datoR->string('Numero');
            $datoR->string('Eres');
            $datoR->string('email')
                ->unique()
                ->nullable();
            $datoR->string('password')
                ->nullable();
            $datoR->timestamp('email_verified_at')
                ->nullable();
            $datoR->rememberToken();
            $datoR->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
