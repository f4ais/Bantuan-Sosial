<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Penerima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Edit Data Penerima Bantuan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penerima.update', $penerima->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Wilayah</label>

            <select name="wilayah" class="form-select" required>

                <option value="Pontianak Barat" {{ $penerima->wilayah == 'Pontianak Barat' ? 'selected' : '' }}>Pontianak Barat</option>

                <option value="Pontianak Kota" {{ $penerima->wilayah == 'Pontianak Kota' ? 'selected' : '' }}>Pontianak Kota</option>

                <option value="Pontianak Selatan" {{ $penerima->wilayah == 'Pontianak Selatan' ? 'selected' : '' }}>Pontianak Selatan</option>

                <option value="Pontianak Timur" {{ $penerima->wilayah == 'Pontianak Timur' ? 'selected' : '' }}>Pontianak Timur</option>

                <option value="Pontianak Tenggara" {{ $penerima->wilayah == 'Pontianak Tenggara' ? 'selected' : '' }}>Pontianak Tenggara</option>

                <option value="Pontianak Utara" {{ $penerima->wilayah == 'Pontianak Utara' ? 'selected' : '' }}>Pontianak Utara</option>

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Created By</label>

            <select name="created_by" class="form-select" required>

                <option value="Admin" {{ $penerima->created_by == 'Admin' ? 'selected' : '' }}>Admin</option>

                <option value="RT/RW" {{ $penerima->created_by == 'RT/RW' ? 'selected' : '' }}>RT/RW</option>

            </select>

        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $penerima->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ $penerima->nik }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ $penerima->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ $penerima->pekerjaan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Penghasilan</label>
            <input type="number" name="penghasilan" class="form-control" value="{{ $penerima->penghasilan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggungan</label>
            <input type="number" name="tanggungan" class="form-control" value="{{ $penerima->tanggungan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kondisi Rumah</label>

            <select name="kondisi_rumah" class="form-select" required>

                <option value="Layak" {{ $penerima->kondisi_rumah == 'Layak' ? 'selected' : '' }}>Layak</option>

                <option value="Kurang Layak" {{ $penerima->kondisi_rumah == 'Kurang Layak' ? 'selected' : '' }}>Kurang Layak</option>

                <option value="Tidak Layak" {{ $penerima->kondisi_rumah == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak</option>

            </select>

        </div>

        <div class="mb-3">
            <label class="form-label">Status Verifikasi</label>

            <select name="status_verifikasi" class="form-select" required>

                <option value="Pending" {{ $penerima->status_verifikasi == 'Pending' ? 'selected' : '' }}>Pending</option>

                <option value="Disetujui" {{ $penerima->status_verifikasi == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>

                <option value="Ditolak" {{ $penerima->status_verifikasi == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>

            </select>

        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('penerima.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>