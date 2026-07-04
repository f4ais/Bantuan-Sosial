<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Penerima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Tambah Data Penerima Bantuan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penerima.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Wilayah</label>

            <select name="wilayah" class="form-control">
                <option value="">-- Pilih Wilayah --</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Created By</label>

            <select name="created_by" class="form-control">
                <option value="">-- Pilih Created By --</option>
                <option value="Admin">Admin</option>
                <option value="RT/RW">RT/RW</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="mb-3">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Penghasilan</label>
            <input type="number" name="penghasilan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggungan</label>
            <input type="number" name="tanggungan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Kondisi Rumah</label>

            <select name="kondisi_rumah" class="form-control">
                <option value="">-- Pilih Kondisi Rumah --</option>
                <option value="Layak">Layak</option>
                <option value="Kurang Layak">Kurang Layak</option>
                <option value="Tidak Layak">Tidak Layak</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Status Verifikasi</label>

            <select name="status_verifikasi" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Disetujui">Disetujui</option>
                <option value="Ditolak">Ditolak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('penerima.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>