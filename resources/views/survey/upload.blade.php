@extends('layouts.app')

@section('content')

<div class="page-header">

    <h2>Foto dan Kondisi Rumah</h2>

    <a href="/survey" class="btn-back">
        ← Kembali
    </a>

</div>

<form class="card-form" method="POST" enctype="multipart/form-data">

    @csrf

    <label>Pilih Warga</label>

    <select name="warga_id">

        <option value="">
            -- Pilih Warga --
        </option>

        @foreach($wargas ?? [] as $warga)

            <option value="{{ $warga->id }}">
                {{ $warga->nik }} - {{ $warga->nama }}
            </option>

        @endforeach

    </select>


    <label>Foto Rumah</label>

    <div class="foto-kosong">
        Foto Rumah Kosong
    </div>

    <input
        type="file"
        name="foto_rumah"
        accept="image/*"
    >


    <label>Kondisi Rumah</label>

    <select name="kondisi_rumah">

        <option value="">
            -- Pilih Kondisi Rumah --
        </option>

        <option value="Layak">
            Layak
        </option>

        <option value="Tidak Layak">
            Tidak Layak
        </option>

    </select>


    <div style="margin-top:20px; display:flex; gap:10px;">

        <button type="submit" class="btn">
            Simpan
        </button>

        <a href="/survey" class="btn-back">
            Kembali
        </a>

    </div>

</form>

@endsection