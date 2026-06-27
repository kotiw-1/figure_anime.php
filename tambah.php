<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah Figure Anime</title>

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

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.title{
    color:#6f42c1;
    font-weight:700;
}

</style>

</head>

<body>

<img src="gambar/<?= $d['gambar']; ?>">
<img src="tema.png" class="banner">

<div class="container mt-4">

<div class="card">

<div class="card-body">

<h2 class="title">
Tambah Data Figure Anime
</h2>

<form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label>Kode Figure</label>
<input type="text" name="kode_figure" class="form-control" required>
</div>

<div class="mb-3">
<label>Nama Figure</label>
<input type="text" name="nama_figure" class="form-control" required>
</div>

<div class="mb-3">
<label>Kategori</label>
<input type="text" name="kategori" class="form-control" required>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" required>
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control" required>
</div>

<div class="mb-3">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" rows="3"></textarea>
</div>

<div class="mb-3">
<label>Upload Gambar</label>
<input type="file" name="gambar" class="form-control" required>
</div>
<div class="mt-3">

<button type="submit" class="btn btn-success">
💾 Simpan

<a href="hapus.php?id=<?= $d['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data ini?')">
Hapus
</a>

</button>
<a href="data_figure.php" class="btn btn-secondary">
⬅ Kembali
</a>
</div>

</form>

</div>

</div>

</div>

</body>
</html>