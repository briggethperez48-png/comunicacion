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
        Schema::create('encuestas', function (Blueprint $datoE) {
            $datoE->id();
            $datoE->unsignedBigInteger('user_id');
            $datoE->string('pregunta1');
            $datoE->string('pregunta2');
            $datoE->string('pregunta3');
            $datoE->string('pregunta4');
            $datoE->string('escala')
                ->nullable();
            $datoE->string('folio')
                ->nullable();
            $datoE->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuestas');
    }
};
