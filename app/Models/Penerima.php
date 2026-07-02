<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';

    protected $fillable = [
        'masyarakat_id',
        'bantuan_id',
        'tanggal_penetapan',
        'status',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class);
    }

    public function penyaluran()
    {
        return $this->hasOne(Penyaluran::class);
    }
}