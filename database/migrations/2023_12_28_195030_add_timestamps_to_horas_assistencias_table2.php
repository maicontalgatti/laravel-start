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
            $table->time('h_inicio_m')->nullable()->change();
            $table->time('h_inicio_t')->nullable()->change();
            $table->time('h_inicio_n')->nullable()->change();
            $table->time('h_fim_m')->nullable()->change();
            $table->time('h_fim_t')->nullable()->change();
            $table->time('h_fim_n')->nullable()->change();
            $table->time('h_total_m')->nullable()->change();
            $table->time('h_total_t')->nullable()->change();
            $table->time('h_total_n')->nullable()->change();
            $table->time('h_normais')->nullable()->change();
            $table->time('h_50')->nullable()->change();
            $table->time('h_100')->nullable()->change();
            $table->time('h_noturnas')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horas_assistencias', function (Blueprint $table) {
            //
        });
    }
};
