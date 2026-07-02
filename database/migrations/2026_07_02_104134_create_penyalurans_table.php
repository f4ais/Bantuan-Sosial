<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penyalurans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('warga_id')
                ->constrained('warga')
                ->cascadeOnDelete();

            $table->foreignId('program_id')
                ->constrained('program_bantuans')
                ->cascadeOnDelete();

            $table->foreignId('penyalur_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('tanggal_penyaluran');

            $table->enum('status', [
                'Menunggu',
                'Disalurkan',
                'Selesai'
            ]);

            $table->text('catatan')->nullable();
            $table->string('dokumentasi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penyalurans');
    }
};