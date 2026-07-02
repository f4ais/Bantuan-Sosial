@extends('layouts.app')

@section('content')

<h1>Dashboard RT/RW</h1>

<div class="card">
    Jumlah Warga Wilayah : {{ $jumlahWargaWilayah }}
</div>

<div class="card">

    <h3>Status Verifikasi</h3>

    <ul>
        @foreach($statusVerifikasi as $status)
            <li>{{ $status }}</li>
        @endforeach
    </ul>

</div>

@endsection