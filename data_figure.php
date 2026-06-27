<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$data = mysqli_query($conn,"SELECT * FROM figure");
?>

<!DOCTYPE html>
<html>
<head>

<title>Data Figure Anime</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:'Montserrat',sans-serif;
}

.banner{
    width:100%;
    height:auto;
}

.title{
    color:#6f42c1;
    font-weight:700;
}

.table-container{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

</style>

</head>

<body>

<img src="tema.png" class="banner">

<div class="container mt-4">

<h2 class="title">
Data Figure Anime
</h2>

<div class="mb-3">

<a href="index.php" class="btn btn-secondary">
Dashboard
</a>

<a href="tambah.php" class="btn btn-success">
Tambah Figure
</a>



</div>

<div class="table-container">

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>
<th>No</th>
<th>Gambar</th>
<th>Kode</th>
<th>Nama Figure</th>
<th>Kategori</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>

<?php
$no=1;

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?= $no++; ?></td>

<td>
<img src="gambar/<?= $d['gambar']; ?>" width="80">
</td>

<td><?= $d['kode_figure']; ?></td>

<td><?= $d['nama_figure']; ?></td>

<td><?= $d['kategori']; ?></td>

<td>Rp <?= number_format($d['harga']); ?></td>

<td><?= $d['stok']; ?></td>

<td>

<a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data ini?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</body>
</html>