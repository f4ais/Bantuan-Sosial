@extends('layouts.app')

@section('content')

<h2>Data Warga</h2>

<table>

    <tr>
        <th>No</th>
        <th>Wilayah</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Penghasilan</th>
        <th>Jumlah Tanggungan</th>
        <th>Kondisi Rumah</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @forelse($wargas as $warga)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $warga->wilayah }}</td>
        <td>{{ $warga->nama }}</td>
        <td>{{ $warga->nik }}</td>
        <td>Rp {{ number_format($warga->penghasilan,0,',','.') }}</td>
        <td>{{ $warga->jumlah_tanggungan }}</td>
        <td>{{ $warga->kondisi_rumah }}</td>

        <td>
            <span class="status">
                Menunggu Verifikasi
            </span>
        </td>

        <td>
            <a href="#" class="btn-aksi">Detail</a>
        </td>
    </tr>

    @empty

    <tr>
        <td colspan="9">
            Tidak ada data yang dimasukkan
        </td>
    </tr>

    @endforelse

</table>

@endsection