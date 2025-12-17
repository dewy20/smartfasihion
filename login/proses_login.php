<?php
session_start();
include "../config/koneksi.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
$data  = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['nama']  = $data['nama'];
    header("Location: ../halaman/beranda.php");
} else {
    echo "Login gagal! <a href='../index.php'>Coba lagi</a>";
}
