<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $fillable = [
        'masyarakat_id',
        'kriteria_id',
        'nilai',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}