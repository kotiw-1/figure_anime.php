<?php

include "koneksi.php";

$kode = $_POST['kode_figure'];
$nama = $_POST['nama_figure'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp, "gambar/".$gambar);

$query = mysqli_query($conn,"INSERT INTO figure
(kode_figure,nama_figure,kategori,harga,stok,keterangan,gambar)
VALUES
('$kode','$nama','$kategori','$harga','$stok','$keterangan','$gambar')");

if($query){

    echo "<script>
    alert('Data berhasil ditambahkan');
    window.location='data_figure.php';
    </script>";

}else{

    echo mysqli_error($conn);

}

?>