<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    protected $table = 'penyaluran';

    protected $fillable = [
        'penerima_id',
        'penyalur_id',
        'tanggal_penyaluran',
        'dokumentasi',
        'keterangan',
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }

    public function penyalur()
    {
        return $this->belongsTo(User::class, 'penyalur_id');
    }
}