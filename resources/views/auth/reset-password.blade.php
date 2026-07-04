<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>

<h2>Reset Password</h2>

<form method="POST" action="#">
    @csrf

    <input type="hidden" name="token">

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <label>Password Baru</label><br>
    <input type="password" name="password"><br><br>

    <label>Konfirmasi Password</label><br>
    <input type="password" name="password_confirmation"><br><br>

    <button type="submit">
        Reset Password
    </button>

</form>

</body>
</html>