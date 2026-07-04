<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Password</title>
</head>
<body>

<h2>Konfirmasi Password</h2>

<form method="POST" action="#">
    @csrf

    <label>Password</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">
        Konfirmasi Password
    </button>

</form>

</body>
</html>