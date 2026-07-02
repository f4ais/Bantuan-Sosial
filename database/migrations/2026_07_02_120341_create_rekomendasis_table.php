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
      Schema::create('rekomendasi', function (Blueprint $table) {
    $table->id();
    $table->foreignId('warga_id')->constrained()->cascadeOnDelete();
    $table->foreignId('program_bantuan_id')->constrained()->cascadeOnDelete();
    $table->string('status')->default('diproses');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasis');
    }
};
