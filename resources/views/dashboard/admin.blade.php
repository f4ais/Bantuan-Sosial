@extends('layouts.app')

@section('content')

<div class="page-header">

    <h2>Dashboard Admin</h2>

    <a href="/warga/create" class="btn">
        + Tambah Data
    </a>

</div>

<table>

    <tr>
        <th>No</th>
        <th>Menu</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Data Warga</td>
        <td>{{ $jumlahWarga }}</td>
        <td>
            <a href="/warga" class="btn-aksi">
                Lihat
            </a>
        </td>
    </tr>

    <tr>
        <td>2</td>
        <td>Data Survey</td>
        <td>{{ $jumlahSurvey }}</td>
        <td>
            <a href="/survey" class="btn-aksi">
                Lihat
            </a>
        </td>
    </tr>

    <tr>
        <td>3</td>
        <td>Penyaluran Bantuan</td>
        <td>{{ $jumlahBantuan }}</td>
        <td>
            <a href="/bantuan" class="btn-aksi">
                Lihat
            </a>
        </td>
    </tr>

</table>

@endsection