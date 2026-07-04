<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
</head>
<body>

<h2>Verifikasi Email</h2>

<p>
Silakan cek email Anda dan klik link verifikasi yang telah dikirim.
</p>

<form method="POST" action="#">
    @csrf

    <button type="submit">
        Kirim Ulang Email Verifikasi
    </button>

</form>

</body>
</html>