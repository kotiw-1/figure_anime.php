<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM figure WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Figure</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Edit Data Figure</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $d['id']; ?>">

<div class="mb-3">
<label>Kode Figure</label>
<input type="text" name="kode_figure" class="form-control"
value="<?= $d['kode_figure']; ?>">
</div>

<div class="mb-3">
<label>Nama Figure</label>
<input type="text" name="nama_figure" class="form-control"
value="<?= $d['nama_figure']; ?>">
</div>

<div class="mb-3">
<label>Kategori</label>
<input type="text" name="kategori" class="form-control"
value="<?= $d['kategori']; ?>">
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control"
value="<?= $d['harga']; ?>">
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control"
value="<?= $d['stok']; ?>">
</div>

<div class="mb-3">
<label>Gambar Lama</label><br>

<img src="../gambar/<?= $d['gambar']; ?>" width="120">
</div>

<div class="mb-3">
<label>Ganti Gambar</label>

<input type="file"
name="gambar"
class="form-control">

<input type="hidden"
name="gambar_lama"
value="<?= $d['gambar']; ?>">
</div>

<button class="btn btn-primary">
Update
</button>

<a href="../data.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</body>
</html>