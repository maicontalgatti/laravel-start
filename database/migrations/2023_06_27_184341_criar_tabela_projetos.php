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
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero', 40);
            $table->string('nome', 80);
            $table->string('cidade', 80);
            $table->string('estado', 80);
            $table->integer('id_cliente');
            $table->string('data_inicio_montagem_esperado', 80);
            $table->string('data_inicio_montagem_real', 80);
            $table->string('custo_montagem_esperado', 80);
            $table->string('custo_montagem_real', 80);
            //$table->foreign('id_cliente')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
