<!DOCTYPE html>
<html>
<head>
    <title>Login SmartFashion</title>
</head>
<body>
    <h2>LOGIN SMARTFASHION</h2>
    <p>Silahkan masukan username dan password</p>

    <form action="auth/proses_login.php" method="post">
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <br>
    <a href="auth/register.php">
        <button>Daftar</button>
    </a>
</body>
</html>
