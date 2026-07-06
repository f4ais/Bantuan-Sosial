@extends('layouts.app')

@section('content')

<div class="page-header">

    <h2>Upload Bukti Penyaluran Bantuan</h2>

    <a href="/bantuan" class="btn-back">
        Kembali
    </a>

</div>

<div class="card-form">

    <label>Foto Bukti Penerimaan Bantuan</label>

    <div class="foto-kosong">
        FOTO PENERIMA BANTUAN
    </div>

    <input type="file" name="foto_bantuan">

    <label>Status Bantuan</label>

    <select name="status_bantuan">
        <option value="Sudah Menerima Bantuan">
            Sudah Menerima Bantuan
        </option>
    </select>

    <br><br>

    <button type="submit" class="btn">
        Simpan
    </button>

    <a href="/bantuan" class="btn-back">
        Kembali
    </a>

</div>

@endsection