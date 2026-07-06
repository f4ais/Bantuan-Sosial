@extends('layouts.app')

@section('content')

<div class="page-header">

    <h2>Upload Bukti Penyaluran Bantuan</h2>

    <a href="/bantuan" class="btn-back">
        ← Kembali
    </a>

</div>

<form class="card-form" method="POST" enctype="multipart/form-data">

    @csrf

    <label>Foto Bukti Penerimaan Bantuan</label>

    <div class="foto-kosong">
        FOTO PENERIMA BANTUAN
    </div>

    <input
        type="file"
        name="foto_bantuan"
    >

    <label>Status Bantuan</label>

    <select name="status_bantuan">

        <option value="Sudah Menerima Bantuan">
            Sudah Menerima Bantuan
        </option>

    </select>

    <div style="margin-top:20px; display:flex; gap:10px;">

        <button type="submit" class="btn">
            Simpan
        </button>

        <a href="/bantuan" class="btn-back">
            Kembali
        </a>

    </div>

</form>

@endsection