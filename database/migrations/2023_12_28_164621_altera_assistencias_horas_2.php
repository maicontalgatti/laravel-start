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
            $table->renameColumn('h_totais_m', 'h_total_m');
            $table->renameColumn('h_totais_t', 'h_total_t');
            $table->renameColumn('h_totais_n', 'h_total_n');
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
