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
        Schema::create('funcionario_cargo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario_id');
            $table->foreignId('cargo_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionario_cargo');
    }
};
