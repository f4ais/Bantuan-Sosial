<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rekomendasis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('warga_id')
                ->constrained('warga')
                ->cascadeOnDelete();

            $table->decimal('skor', 8, 2);
            $table->integer('prioritas');
            $table->string('periode');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekomendasis');
    }
};