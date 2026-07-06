@extends('layouts.app')

@section('content')

<div class="page-header">

    <h2>Data Survey</h2>

    <a href="/survey/upload" class="btn">
        Upload
    </a>

</div>

<table>

    <tr>
        <th>No</th>
        <th>Nama Survey</th>
        <th>Tanggal</th>
        <th>Status</th>
    </tr>

    @forelse($surveys as $survey)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $survey->nama }}</td>
        <td>{{ $survey->tanggal }}</td>
        <td>{{ $survey->status }}</td>
    </tr>

    @empty

    <tr>
        <td colspan="4">
            Tidak ada data yang dimasukkan
        </td>
    </tr>

    @endforelse

</table>

@endsection