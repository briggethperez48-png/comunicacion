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
        Schema::create('examens', function (Blueprint $datosEx) {
            $datosEx->id();
            $datosEx->unsignedBigInteger('usuario_id');

            $datosEx->string('pregunta1');
            $datosEx->string('pregunta2');
            $datosEx->string('pregunta3');
            $datosEx->text('sugerencias')->nullable();
            $datosEx->string('escala')
                ->nullable();
            $datosEx->string('folio');
            $datosEx->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
