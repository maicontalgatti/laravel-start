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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca', 80);
            $table->string('modelo', 80);
            $table->string('placa', 10);
            $table->integer('km_aquisicao');
            $table->integer('km_atual');
            $table->integer('per_troca_oleo_dias');
            $table->integer('ultima_troca_oleo_km');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
