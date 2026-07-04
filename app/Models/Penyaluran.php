<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    protected $fillable = [
        'warga_id',
        'program_bantuan_id'
    ];
}