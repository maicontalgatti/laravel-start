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

        Schema::create('mysql')->create('horas_assistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_assistencia');
            $table->integer('id_tecnico');
            $table->datetime('dia');
            $table->boolean('feriado')->default(false);
            $table->datetime('h_inicial_manha')->nullable();
            $table->datetime('h_final_manha')->nullable();
            $table->datetime('h_total_manha')->nullable();
            $table->datetime('h_inicial_tarde')->nullable();
            $table->datetime('h_final_tarde')->nullable();
            $table->datetime('h_total_tarde')->nullable();
            $table->datetime('h_inicial_noite')->nullable();
            $table->datetime('h_final_noite')->nullable();
            $table->datetime('h_total_noite')->nullable();
            $table->datetime('h_totais');
            $table->datetime('h_totais_normais')->nullable();
            $table->datetime('h_totais_50')->nullable();
            $table->datetime('h_totais_100')->nullable();
            $table->datetime('h_noturnas')->nullable();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
