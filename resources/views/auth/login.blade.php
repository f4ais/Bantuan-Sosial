<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            width:400px;
            background:white;
            padding:35px;
            border-radius:12px;
            box-shadow:0 5px 20px rgba(0,0,0,.15);
        }

        .form-control{
            height:45px;
        }

        .btn-login{
            height:45px;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="login-box">

    <h3 class="text-center mb-4">
        Login
    </h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.process') }}">

        @csrf

        <div class="mb-3">

            <label>Email</label>

            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email') }}"
                required>

        </div>

        <div class="mb-3">

            <label>Password</label>

            <input
                type="password"
                name="password"
                class="form-control"
                required>

        </div>

        <div class="d-flex justify-content-end mb-3">

            <a href="#">
    Lupa Password?
</a>
            </a>

        </div>

        <button class="btn btn-primary w-100 btn-login">

            Login

        </button>

    </form>

</div>

</body>
</html>