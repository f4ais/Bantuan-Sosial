<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $fillable = [
        'wilayah',
        'created_by',
        'nama',
        'nik',
        'alamat',
        'pekerjaan',
        'penghasilan',
        'tanggungan',
        'kondisi_rumah',
        'status_verifikasi',
    ];
}