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
        Schema::create('corgo_epis', function (Blueprint $table) {
            $table->id();
            $table->date('duracao');
            $table->foreignId('cargo_id');
            $table->foreignId('epi_id');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('epi_id')->references('id')->on('epis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corgo_epis');
    }
};
