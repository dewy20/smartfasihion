<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h2>REGISTRASI</h2>
    <p>Silahkan lengkapi data di bawah ini</p>

    <form action="proses_register.php" method="post">
        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Alamat</label><br>
        <input type="text" name="alamat" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <label>Telpon</label><br>
        <input type="text" name="telpon" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Daftar</button>
        <a href="../index.php">
            <button type="button">Batal</button>
        </a>
    </form>
</body>
</html>
