<?php 
session_start();
require 'functions.php';
if (isset($_POST['registrasi'])) {
  if(registrasi($_POST)> 0){
    echo "<script>
    alert('user baru berhasil didaftarkan. Silahkan Login!');
    document.location.href = 'masuk.php';
    </script>";
  }else {
    echo 'user gagal didaftarkan!';
  }
}
?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md" style="background-color: rgb(0, 141, 201)">
  <div class="container">
    <a class="navbar-brand" href="#" style="color:white">
      <img src="img/healthlogo.png" alt="" width="30" height="30" style="margin-right:10px">CintaSehat
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color:white"></i></span>
    </button>
  </div>
</nav>
<!-- navbar -->
<!-- Awal Form register --> 
<div class="container mt-5 pt-5 mb-5">
  <form action="" class="form-container border rounded" method="post">
        <h1 class="title-name ms-3 pt-3 mb-5 text-center">Daftar</h1>
    <div class="row justify-content-center mb-5 mx-3">
        <div class="col-md-7">
            <div class="mb-3">
                <label for="username" class="form-label">Nama</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-user"></i></span> 
                    <input type="text" autocomplete="off" class="form-control" id="username" placeholder="Nama" name="username" required>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" autocomplete="off" class="form-control" id="password" placeholder="Password" name="password1" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Ulangi Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                    <input type="password" autocomplete="off" class="form-control" id="password" placeholder="Password" name="password2" required>
                </div>
                <div class="mt-2">
                  <label>Kamu Sudah Punya Akun? <a href="masuk.php" class="text-link"> Login Disini</a></label>
                </div>
            </div>
        </div>
    <div class="row mt-5 justify-content-center">
            <div class="col-md-4 d-grid">
                <button type="submit" class="btn btn-outline-primary mb-3" name="registrasi">Daftar</button>
            </div>
            <div class="col-md-4 d-grid">
                <button type="reset" class="btn btn-outline-danger mb-3">Hapus Data</button>
            </div>
            </div>
    </div>
  </form>
</div>

    <!-- Akhir Form register -->
</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</html>