@extends('layouts.app')

@section('content')

<h1>Daftar Bantuan</h1>

<div class="card">

    <ul>
        @foreach($bantuans as $bantuan)
            <li>{{ $bantuan->nama_bantuan }}</li>
        @endforeach
    </ul>

</div>

@endsection