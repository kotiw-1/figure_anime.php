<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "db_figure_anime";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi Berhasil";
?>