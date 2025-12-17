<?php
include "../config/koneksi.php";

$nama     = $_POST['nama'];
$alamat   = $_POST['alamat'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$telpon   = $_POST['telpon'];
$email    = $_POST['email'];

$query = "INSERT INTO users VALUES (
    NULL,
    '$nama',
    '$alamat',
    '$password',
    '$telpon',
    '$email'
)";

mysqli_query($koneksi, $query);

// setelah daftar → kembali ke login
header("Location: ../index.php");
