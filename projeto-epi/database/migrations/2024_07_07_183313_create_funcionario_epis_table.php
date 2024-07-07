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
        Schema::create('funcionario_epis', function (Blueprint $table) {
            $table->id();
            $table->char('status', 1)->default('A');
            $table->char('tipo', 1)->default('C');
            $table->date('duracao')->nullable();
            $table->foreignId('funcionario_id');
            $table->foreignId('epi_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('epi_id')->references('id')->on('epis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionario_epis');
    }
};
