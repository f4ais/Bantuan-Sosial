<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramBantuan extends Model
{
    protected $fillable = [
        'kode_program',
        'nama_program',
        'deskripsi',
        'kategori',
        'kuota',
        'status'
    ];

    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class);
    }
}