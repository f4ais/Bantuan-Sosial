<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $wargas = Warga::all();

        return view('warga.index', compact('wargas'));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        Warga::create([
            'wilayah' => $request->wilayah,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'penghasilan' => $request->penghasilan,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'kondisi_rumah' => $request->kondisi_rumah,
        ]);

        return redirect('/warga');
    }
}