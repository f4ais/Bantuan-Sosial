<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'ranking';

    protected $fillable = [
        'masyarakat_id',
        'nilai_akhir',
        'peringkat',
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }
}