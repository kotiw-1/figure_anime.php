<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>

<html>
<head>

<title>figure anime</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

body{
    background:#121212;
    color:white;
    font-family:'Montserrat',sans-serif;
}

.banner{
    width:100%;
    height:auto;
    display:block;
}

.card-custom{
    background:#1e1e2f;
    color:white;
    border:none;
    border-radius:15px;
    transition:0.3s;
}

.card-custom:hover{
    transform:translateY(-5px);
}

.title{
    color:#c8a8ff;
    font-size:38px;
    font-weight:700;
    letter-spacing:1px;
}

.subtitle{
    color:#d6d6d6;
    font-size:16px;
}

.offcanvas{
    background:#1a1a28;
}

.menu-btn{
    width:100%;
    margin-bottom:10px;
}

</style>

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<div class="container-fluid p-0">

<button class="btn btn-dark m-3 position-absolute"
     type="button"
     data-bs-toggle="offcanvas"
     data-bs-target="#menuSidebar">

☰

</button>

<img src="tema.png"
  class="banner">

</div>

<div class="offcanvas offcanvas-start text-white"
     tabindex="-1"
     id="menuSidebar">

<div class="offcanvas-header">

<h5>Menu Navigasi</h5>

<button type="button"
     class="btn-close btn-close-white"
     data-bs-dismiss="offcanvas"> </button>

</div>

<div class="offcanvas-body">

<p>
Login Sebagai :
<b><?php echo $_SESSION['username']; ?></b>
</p>

<hr>

<a href="index.php"
class="btn btn-outline-light menu-btn">
Dashboard </a>

<a href="data_figure.php"
class="btn btn-outline-light menu-btn">
Data Figure </a>

<a href="tambah.php"
class="btn btn-outline-light menu-btn">
Tambah Figure </a>

<a href="laporan.php"
class="btn btn-outline-light menu-btn">
Laporan </a>

<a href="logout.php"
class="btn btn-danger menu-btn">

<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

include "koneksi.php";

$jmlFigure = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM figure"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}

.card-custom{
    border:none;
    border-radius:15px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}
</style>

</head>
<body>

<div class="container mt-5">

<h2 class="mb-4">
Dashboard Figure Anime
</h2>

<div class="row">

<div class="col-md-4">
<div class="card card-custom">
<div class="card-body">

<h5>Total Figure</h5>

<h1><?= $jmlFigure; ?></h1>

</div>
</div>
</div>

</div>

<br>

<a href="data.php" class="btn btn-primary">
Kelola Data Figure
</a>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>

</body>
</html>

Logout </a>

</div>

</div>

<div class="container mt-4">

<h1 class="text-center title">
figure anime
</h1>

<p class="text-center subtitle">
Sistem Pengelolaan Data Figure Anime
</p>

<h4 class="mt-5">
Selamat Datang,
<?php echo $_SESSION['username']; ?>
</h4>

<div class="row mt-4">

<div class="col-md-3 mb-3">

<div class="card card-custom shadow">

<div class="card-body text-center">

<h5>Data Figure</h5>

<a href="data_figure.php"
class="btn btn-primary">
Buka </a>

</div>

</div>

</div>

<div class="col-md-3 mb-3">

<div class="card card-custom shadow">

<div class="card-body text-center">

<h5>Tambah Figure</h5>

<a href="tambah.php"
class="btn btn-success">
Tambah </a>

</div>

</div>

</div>

<div class="col-md-3 mb-3">

<div class="card card-custom shadow">

<div class="card-body text-center">

<h5>Laporan</h5>

<a href="laporan.php"
class="btn btn-danger">
Cetak </a>

</div>

</div>

</div>

<div class="col-md-3 mb-3">

<div class="card card-custom shadow">

<div class="card-body text-center">

<h5>Logout</h5>

<a href="logout.php"
class="btn btn-secondary">
Keluar </a>

</div>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
