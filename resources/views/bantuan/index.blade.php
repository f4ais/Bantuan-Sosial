@extends('layouts.app')

@section('content')

<div class="page-header">

    <h2>Penyaluran Bantuan</h2>

    <a href="/bantuan/upload" class="btn">
        Upload
    </a>

</div>

<table>

    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama Penerima</th>
        <th>Wilayah</th>
    </tr>

    @forelse($bantuans as $bantuan)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $bantuan->nik ?? '-' }}</td>
        <td>{{ $bantuan->nama_penerima ?? '-' }}</td>
        <td>{{ $bantuan->wilayah ?? '-' }}</td>
    </tr>

    @empty

    <tr>
        <td colspan="4">
            Belum ada data penyaluran bantuan
        </td>
    </tr>

    @endforelse

</table>

@endsection