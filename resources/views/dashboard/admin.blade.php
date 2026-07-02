@extends('layouts.app')

@section('content')

<h1>Dashboard Admin</h1>

<div class="card">
    Jumlah Warga : {{ $jumlahWarga }}
</div>

<div class="card">
    Jumlah Survey : {{ $jumlahSurvey }}
</div>

<div class="card">
    Jumlah Bantuan : {{ $jumlahBantuan }}
</div>

<div class="card">
    Jumlah Penyaluran : {{ $jumlahPenyaluran }}
</div>

@endsection