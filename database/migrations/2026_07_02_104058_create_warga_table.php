<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();

            $table->foreignId('wilayah_id')
                ->constrained('wilayah')
                ->cascadeOnDelete();

            $table->foreignId('created_by')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('nama');
            $table->string('nik', 16)->unique();
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');

            $table->enum('jenis_kelamin', ['L', 'P']);

            $table->text('alamat');
            $table->string('pekerjaan');
            $table->decimal('penghasilan', 15, 2);
            $table->integer('jumlah_tanggungan');
            $table->string('kondisi_rumah');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};