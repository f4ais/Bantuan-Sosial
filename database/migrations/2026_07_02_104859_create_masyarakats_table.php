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
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id();

            $table->string('nik', 16)->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('pekerjaan');
            $table->decimal('penghasilan', 15, 2);
            $table->integer('jumlah_tanggungan');
            $table->enum('status_rumah', ['Milik Sendiri', 'Kontrak', 'Sewa', 'Menumpang']);
            $table->string('no_hp', 15)->nullable();

            // RT/RW yang menginput data
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};