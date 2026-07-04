<!DOCTYPE html>
<html>
<head>
    <title>Detail Data Penerima</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Detail Data Penerima Bantuan</h2>

    <table class="table table-bordered">

        <tr>
            <th width="250">Wilayah</th>
            <td>{{ $penerima->wilayah }}</td>
        </tr>

        <tr>
            <th>Created By</th>
            <td>{{ $penerima->created_by }}</td>
        </tr>

        <tr>
            <th>Nama</th>
            <td>{{ $penerima->nama }}</td>
        </tr>

        <tr>
            <th>NIK</th>
            <td>{{ $penerima->nik }}</td>
        </tr>

        <tr>
            <th>Alamat</th>
            <td>{{ $penerima->alamat }}</td>
        </tr>

        <tr>
            <th>Pekerjaan</th>
            <td>{{ $penerima->pekerjaan }}</td>
        </tr>

        <tr>
            <th>Penghasilan</th>
            <td>Rp {{ number_format($penerima->penghasilan,0,',','.') }}</td>
        </tr>

        <tr>
            <th>Tanggungan</th>
            <td>{{ $penerima->tanggungan }}</td>
        </tr>

        <tr>
            <th>Kondisi Rumah</th>
            <td>{{ $penerima->kondisi_rumah }}</td>
        </tr>

        <tr>
            <th>Status Verifikasi</th>
            <td>
                @if($penerima->status_verifikasi == 'Pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @elseif($penerima->status_verifikasi == 'Disetujui')
                    <span class="badge bg-success">Disetujui</span>
                @else
                    <span class="badge bg-danger">Ditolak</span>
                @endif
            </td>
        </tr>

    </table>

    <a href="{{ route('penerima.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</div>

</body>
</html>