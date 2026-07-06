<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = [
        'wilayah',
        'nama',
        'nik',
        'penghasilan',
        'jumlah_tanggungan',
        'kondisi_rumah'
    ];
}