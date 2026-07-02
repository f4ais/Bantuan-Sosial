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
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();

            $table->foreignId('masyarakat_id')
                  ->constrained('masyarakat')
                  ->cascadeOnDelete();

            $table->foreignId('bantuan_id')
                  ->constrained('bantuan')
                  ->cascadeOnDelete();

            $table->date('tanggal_penetapan');

            $table->enum('status', [
                'Menunggu',
                'Disalurkan',
                'Selesai'
            ])->default('Menunggu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima');
    }
};