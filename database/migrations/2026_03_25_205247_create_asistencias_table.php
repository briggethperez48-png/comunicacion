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
        Schema::create('asistencias', function (Blueprint $datoA) {
            $datoA->id();
            $datoA->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $datoA->integer('dia');
            $datoA->date('fecha');
            $datoA->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
