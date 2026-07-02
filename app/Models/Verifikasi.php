<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    protected $table = 'verifikasi';

    protected $fillable = [
        'masyarakat_id',
        'surveyor_id',
        'status',
        'catatan',
        'foto',
        'tanggal_verifikasi',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function surveyor()
    {
        return $this->belongsTo(User::class, 'surveyor_id');
    }
}