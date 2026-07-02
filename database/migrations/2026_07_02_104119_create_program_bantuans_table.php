<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_bantuans', function (Blueprint $table) {
            $table->id();

            $table->string('nama_program');
            $table->string('jenis_bantuan');
            $table->string('periode');
            $table->integer('kuota');
            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_bantuans');
    }
};