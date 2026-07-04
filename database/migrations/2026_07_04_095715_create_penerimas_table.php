<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerimas', function (Blueprint $table) {

            $table->id();

            $table->string('wilayah')->nullable();
            $table->string('created_by');

            $table->string('nama');
            $table->string('nik')->unique();
            $table->text('alamat');
            $table->string('pekerjaan');

            $table->decimal('penghasilan', 15, 2);

            $table->integer('tanggungan');

            $table->enum('kondisi_rumah', [
                'Layak',
                'Kurang Layak',
                'Tidak Layak'
            ]);

            $table->enum('status_verifikasi', [
                'Pending',
                'Disetujui',
                'Ditolak'
            ])->default('Pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerimas');
    }
};