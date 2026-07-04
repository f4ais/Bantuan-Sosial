@extends('layouts.app')

@section('content')

<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">

    <h2>Tambah Data Warga</h2>

    <a href="/dashboard"
       style="
            background:#6c757d;
            color:white;
            padding:8px 15px;
            border-radius:5px;
            text-decoration:none;
       ">
        ← Kembali
    </a>

</div>

<form action="/warga" method="POST">

    @csrf

    <label>Wilayah</label>

    <select name="wilayah">
        <option>RT 01 / RW 01</option>
        <option>RT 02 / RW 01</option>
        <option>RT 03 / RW 01</option>
    </select>

    <label>Nama</label>
    <input type="text" name="nama">

    <label>NIK</label>
    <input type="text" name="nik">

    <label>Alamat</label>
    <textarea name="alamat"></textarea>

    <label>Penghasilan</label>
    <input type="number" name="penghasilan">

    <label>Jumlah Tanggungan</label>
    <input type="number" name="jumlah_tanggungan">

    <label>Kondisi Rumah</label>
    <textarea name="kondisi_rumah"></textarea>

    <br><br>

    <button type="submit"
        style="
            background:#28a745;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:5px;
        ">
        Simpan
    </button>

</form>

@endsection