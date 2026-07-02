<!DOCTYPE html>
<html>
<head>
    <title>Sistem Bantuan Sosial</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            margin:0;
            background:#f4f6f9;
        }

        .navbar{
            background:#0d6efd;
            padding:15px;
        }

        .navbar a{
            color:white;
            text-decoration:none;
            margin-right:20px;
            font-weight:bold;
        }

        .container{
            width:90%;
            margin:auto;
            padding:20px;
        }

        .card{
            background:white;
            padding:20px;
            margin-bottom:20px;
            border-radius:10px;
            box-shadow:0 0 5px rgba(0,0,0,0.2);
        }

    </style>

</head>

<body>

<div class="navbar">

    <a href="/dashboard">Admin</a>
    <a href="/rtrw">RT/RW</a>
    <a href="/surveyor">Surveyor</a>
    <a href="/penyalur">Penyalur</a>

</div>

<div class="container">

    @yield('content')

</div>

</body>
</html>