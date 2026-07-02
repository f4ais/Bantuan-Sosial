<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $fillable = [
        'warga_id',
        'program_bantuan_id',
        'status',
        'catatan',
        'skor'
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function programBantuan()
    {
        return $this->belongsTo(ProgramBantuan::class);
    }
}