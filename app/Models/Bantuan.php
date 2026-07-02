<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'bantuan';

    protected $fillable = [
        'nama_bantuan',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    public function penerima()
    {
        return $this->hasMany(Penerima::class);
    }
}