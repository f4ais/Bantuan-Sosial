@extends('layouts.app')

@section('content')

<div style="display:flex;justify-content:space-between;">

<h2>Tambah Data Survey</h2>

<a href="/dashboard" class="btn">
← Kembali
</a>

</div>

<form action="/dashboard/tambah-survey" method="POST">

@csrf

<label>Nama Survey</label>
<input type="text" name="nama">

<label>Tanggal</label>
<input type="date" name="tanggal">

<label>Status</label>
<input type="text" name="status">

<button type="submit">
Simpan
</button>

</form>

@endsection