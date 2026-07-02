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
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('masyarakat_id')
                  ->constrained('masyarakat')
                  ->onDelete('cascade');

            $table->foreignId('surveyor_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->enum('status', [
                'Menunggu',
                'Layak',
                'Tidak Layak'
            ])->default('Menunggu');

            $table->text('catatan')->nullable();

            $table->string('foto')->nullable();

            $table->date('tanggal_verifikasi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi');
    }
};