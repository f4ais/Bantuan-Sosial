<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerima Bantuan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">
        <h2>Data Penerima Bantuan</h2>

        <a href="{{ route('penerima.create') }}" class="btn btn-primary">
            Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Wilayah</th>
                <th>Created By</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th>Status</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($penerimas as $key => $penerima)

            <tr>

                <td>{{ $key + 1 }}</td>
                <td>{{ $penerima->wilayah }}</td>
                <td>{{ $penerima->created_by }}</td>
                <td>{{ $penerima->nama }}</td>
                <td>{{ $penerima->nik }}</td>
                <td>{{ $penerima->pekerjaan }}</td>
                <td>Rp {{ number_format($penerima->penghasilan,0,',','.') }}</td>
                <td>{{ $penerima->status_verifikasi }}</td>

                <td>

                    <a href="{{ route('penerima.show',$penerima->id) }}" class="btn btn-info btn-sm">
                        Detail
                    </a>

                    <a href="{{ route('penerima.edit',$penerima->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('penerima.destroy',$penerima->id) }}" method="POST" style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="9" class="text-center">
                    Belum ada data penerima.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>