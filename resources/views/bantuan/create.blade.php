@extends('layouts.app')

@section('content')

<div style="display:flex;justify-content:space-between;">

<h2>Tambah Program Bantuan</h2>

<a href="/dashboard" class="btn">
← Kembali
</a>

</div>

<form action="/dashboard/tambah-bantuan" method="POST">

@csrf

<label>Nama Bantuan</label>

<input
    type="text"
    name="nama_bantuan"
>

<button type="submit">
Simpan
</button>

</form>

@endsection