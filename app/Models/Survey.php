<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('survey', function (Blueprint $table) {
            $table->id();

            // relasi ke warga
            $table->foreignId('warga_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('tanggal_survey');
            $table->text('hasil_survey');

            // contoh penilaian (opsional tapi sering dipakai di tugas)
            $table->integer('penghasilan')->nullable();
            $table->integer('jumlah_tanggungan')->nullable();
            $table->string('kondisi_rumah')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('survey');
    }
};