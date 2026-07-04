<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>

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
            width:400px;
            background:#fff;
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

    <h3 class="text-center mb-3">Lupa Password</h3>

    <p class="text-center text-muted">
        Masukkan email yang terdaftar.
    </p>

    <form method="POST" action="#">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Masukkan Email"
                required>
        </div>

        <button class="btn btn-primary w-100 btn-custom">
            Kirim Link Reset
        </button>

    </form>

    <hr>

    <div class="text-center">
        <a href="{{ route('login') }}">Kembali ke Login</a>
    </div>

</div>

</body>
</html>