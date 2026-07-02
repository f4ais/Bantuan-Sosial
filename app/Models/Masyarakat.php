<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';

    protected $fillable = [
        'nik',
        'nama',
        'alamat',
        'rt',
        'rw',
        'tanggal_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'penghasilan',
        'jumlah_tanggungan',
        'status_rumah',
        'no_hp',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function verifikasi()
    {
        return $this->hasOne(Verifikasi::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function ranking()
    {
        return $this->hasOne(Ranking::class);
    }

    public function penerima()
    {
        return $this->hasOne(Penerima::class);
    }
}