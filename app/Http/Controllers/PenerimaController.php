<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index()
    {
        $penerimas = Penerima::all();
        return view('penerima.index', compact('penerimas'));
    }

    public function create()
    {
        return view('penerima.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'wilayah' => 'nullable',
            'created_by' => 'required',
            'nama' => 'required',
            'nik' => 'required|unique:penerimas,nik',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required|numeric',
            'tanggungan' => 'required|integer',
            'kondisi_rumah' => 'required',
            'status_verifikasi' => 'required',
        ]);

        Penerima::create($request->all());

        return redirect()->route('penerima.index')
            ->with('success', 'Data penerima berhasil ditambahkan.');
    }

    public function show($id)
    {
        $penerima = Penerima::findOrFail($id);
        return view('penerima.show', compact('penerima'));
    }

    public function edit($id)
    {
        $penerima = Penerima::findOrFail($id);
        return view('penerima.edit', compact('penerima'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'wilayah' => 'nullable',
            'created_by' => 'required',
            'nama' => 'required',
            'nik' => 'required|unique:penerimas,nik,' . $id,
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required|numeric',
            'tanggungan' => 'required|integer',
            'kondisi_rumah' => 'required',
            'status_verifikasi' => 'required',
        ]);

        $penerima = Penerima::findOrFail($id);

        $penerima->update($request->all());

        return redirect()->route('penerima.index')
            ->with('success', 'Data penerima berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penerima = Penerima::findOrFail($id);

        $penerima->delete();

        return redirect()->route('penerima.index')
            ->with('success', 'Data penerima berhasil dihapus.');
    }
}