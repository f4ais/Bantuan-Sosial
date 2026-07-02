<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();

            $table->foreignId('warga_id')
                ->constrained('warga')
                ->cascadeOnDelete();

            $table->foreignId('surveyor_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('tanggal_survey');
            $table->string('hasil_verifikasi');
            $table->text('catatan')->nullable();
            $table->string('foto')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};