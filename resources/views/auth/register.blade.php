<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .card-box{
            width:430px;
            background:white;
            padding:35px;
            border-radius:12px;
            box-shadow:0 5px 20px rgba(0,0,0,.15);
        }

        .form-control{
            height:45px;
        }

        .btn-custom{
            height:45px;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="card-box">

    <h3 class="text-center mb-4">
        Buat Akun
    </h3>

    <form method="POST" action="#">
        @csrf

        <div class="mb-3">

            <label>Nama Lengkap</label>

            <input
                type="text"
                class="form-control"
                name="name"
                required>

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input
                type="email"
                class="form-control"
                name="email"
                required>

        </div>

        <div class="mb-3">

            <label>Password</label>

            <input
                type="password"
                class="form-control"
                name="password"
                required>

        </div>

        <div class="mb-3">

            <label>Konfirmasi Password</label>

            <input
                type="password"
                class="form-control"
                name="password_confirmation"
                required>

        </div>

        <button class="btn btn-success w-100 btn-custom">

            Daftar

        </button>

    </form>

    <hr>

    <div class="text-center">

        Sudah punya akun?

        <a href="{{ route('login') }}">
            Login
        </a>

    </div>

</div>

</body>
</html>