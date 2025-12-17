<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>
    <h2>Selamat datang, <?= $_SESSION['nama']; ?></h2>
    <h3>Silahkan pilih baju</h3>

    <ul>
        <li>Baju Kaos - Rp 50.000</li>
        <li>Kemeja - Rp 120.000</li>
        <li>Jaket - Rp 200.000</li>
    </ul>

    <a href="../auth/logout.php">Logout</a>
</body>
</html>
