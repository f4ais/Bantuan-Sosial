<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'wilayah_id'
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }
}