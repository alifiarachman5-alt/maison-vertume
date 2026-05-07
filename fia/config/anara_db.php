<?php


$host     = "localhost";
$user     = "root";
$password = "";           // kosong kalau pakai XAMPP default
$database = "anara_db";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi, "utf8");
?>