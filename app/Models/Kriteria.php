<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';

    protected $fillable = [
        'nama_kriteria',
        'bobot',
        'atribut',
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}