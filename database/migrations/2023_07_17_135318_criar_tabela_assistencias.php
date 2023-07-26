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
        Schema::create('assistencias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_assistencia', 45);
            $table->string('status', 10);
            $table->string('garantia', 5);
            $table->integer('quantidade_horas' );
            $table->string('horario_inicio', 45);
            $table->string('horario_fim', 45);
            $table->string('data_chamado', 45);
            $table->string('data_atendimento', 45);
            $table->string('descricao', 200);
            $table->integer('id_cliente');
            $table->integer('id_pessoas');
            $table->integer('id_projetops');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistencias');
    }
};
