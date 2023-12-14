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

        Schema::connection('mysql')->table('assistencias', function (Blueprint $table) {
            if (Schema::hasColumn('assistencias', 'quantidade_horas')) {
                Schema::table('assistencias', function (Blueprint $table) {
                    $table->dropColumn('quantidade_horas');
                });
            }
            if (Schema::hasColumn('assistencias', 'id_pessoas')) {
                Schema::table('assistencias', function (Blueprint $table) {
                    $table->dropColumn('id_pessoas');
                });
            }
            if (Schema::hasColumn('assistencias', 'preco_hora')) {
                Schema::table('assistencias', function (Blueprint $table) {
                    $table->dropColumn('preco_hora');
                });
            }
        }
        );


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
