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
        Schema::table('horas_assistencias', function (Blueprint $table) {
            $table->renameColumn('h_inicial_manha', 'h_inicio_m');
            $table->renameColumn('h_final_manha', 'h_fim_m');
            $table->renameColumn('h_total_manha', 'h_totais_m');
            $table->renameColumn('h_inicial_tarde', 'h_inicio_t');
            $table->renameColumn('h_final_tarde', 'h_fim_t');
            $table->renameColumn('h_total_tarde', 'h_totais_t');
            $table->renameColumn('h_inicial_noite', 'h_inicio_n');
            $table->renameColumn('h_final_noite', 'h_fim_n');
            $table->renameColumn('h_total_noite', 'h_totais_n');
            $table->renameColumn('h_totais_normais','h_normais');
            $table->renameColumn('h_totais_50','h_50');
            $table->renameColumn('h_totais_100','h_100');
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
