<?php

include "koneksi.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    // Ambil data gambar
    $data = mysqli_query($conn, "SELECT * FROM figure WHERE id='$id'");
    $d = mysqli_fetch_array($data);

    // Hapus file gambar
    if($d){
        if(!empty($d['gambar']) && file_exists("gambar/".$d['gambar'])){
            unlink("gambar/".$d['gambar']);
        }

        // Hapus data dari database
        mysqli_query($conn, "DELETE FROM figure WHERE id='$id'");
    }
}

header("Location: data_figure.php");
exit();

?>