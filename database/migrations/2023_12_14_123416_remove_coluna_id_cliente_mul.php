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
            if (Schema::hasColumn('assistencias', 'id_cliente')) {
                Schema::table('assistencias', function (Blueprint $table) {
                    $table->dropForeign('fk_assistencias_cliente');
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
