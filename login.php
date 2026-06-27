<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($cek) > 0){

        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit();

    }else{

        echo "<script>
        alert('Username atau Password Salah!');
        </script>";

    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login | One Piece Figure Store</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#121212;
    font-family:Arial, Helvetica, sans-serif;
}

.login-box{
    background:#1f1f2e;
    color:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0px 0px 20px rgba(179,136,255,.5);
}

.title{
    color:#b388ff;
    font-weight:bold;
}

.btn-warning{
    font-weight:bold;
}

.banner{
    width:100%;
    height:auto;
    border-radius:20px;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-8">

<img src="tema.png" class="banner">

<div class="login-box mt-3">

<h2 class="text-center title">
🏴‍☠️ ONE PIECE FIGURE STORE ⚔️
</h2>

<p class="text-center">
Silakan Login Terlebih Dahulu
</p>

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<div class="d-grid">

<button
type="submit"
name="login"
class="btn btn-warning">

MASUK

</button>

</div>

</form>

</div>

</div>

</div>

</div>

</body>
</html>