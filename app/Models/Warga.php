<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = [
        'wilayah_id',
        'nik',
        'nama',
        'alamat',
        'jenis_kelamin',
        'no_hp'
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }

    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class);
    }
}