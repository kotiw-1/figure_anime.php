<?php

include "../koneksi.php";

$id = $_POST['id'];
$kode = $_POST['kode_figure'];
$nama = $_POST['nama_figure'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$gambarLama = $_POST['gambar_lama'];

if($_FILES['gambar']['name'] != ""){

    $gambarBaru = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp,"../gambar/".$gambarBaru);

    if(file_exists("../gambar/".$gambarLama)){
        unlink("../gambar/".$gambarLama);
    }

}else{

    $gambarBaru = $gambarLama;

}

mysqli_query($conn,"
UPDATE figure SET

kode_figure='$kode',
nama_figure='$nama',
kategori='$kategori',
harga='$harga',
stok='$stok',
gambar='$gambarBaru'

WHERE id='$id'
");

header("Location: ../data.php");

?>