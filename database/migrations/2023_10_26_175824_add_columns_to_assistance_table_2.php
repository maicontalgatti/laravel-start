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
        Schema::table('assistencias', function (Blueprint $table) {
                $table->string('titulo');
                $table->unsignedTinyInteger('percentage')->default(0)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assistance_table_2', function (Blueprint $table) {
            //
        });
    }
};
