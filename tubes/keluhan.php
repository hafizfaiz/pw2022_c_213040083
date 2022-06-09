<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION['login'])) {
  header("Location: masuk.php");
  exit;
}
if (isset($_POST['kirim'])) {  
  //cek apakah data berhasil di tambahkan atau tidak
  if ( keluhan($_POST)) {
      echo "
        <script>
          alert('data berhasil didikirim!!');
          document.location.href = 'keluhan.php'
        </script>
      ";
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
<a href="index.php">Kembali</a>
<div class="container mt-5 pt-5 mb-5">
  <form action="" class="form-container border rounded" method="post">
        <h1 class="title-name ms-3 pt-3 mb-5 text-center">Form Keluhan</h1>
    <div class="row justify-content-center mb-5 mx-3">
        <div class="col-md-7">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input type="text" autocomplete="off" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="notelp" class="form-label">No Telp</label>
                <div class="input-group mb-3">
                    <input type="number" autocomplete="off" class="form-control" id="notelp" placeholder="No Telp" name="notelp" required>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="email" class="form-label" id="jeniskelamin" name="jeniskelamin">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Laki-Laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <div class="input-group mb-3">
                    <textarea type="text" autocomplete="off" class="form-control" id="alamat" placeholder="Alamat Pasien" name="alamat" required></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="keluhan" class="form-label">keluhan</label>
                <div class="input-group mb-3">
                    <textarea type="text" autocomplete="off" class="form-control" id="keluhan" placeholder="jelaskan keluhan yang diderita" name="keluhan" required></textarea>
                </div>
            </div>
        </div>
    <div class="row mt-5 justify-content-center">
            <div class="col-md-4 d-grid">
                <button type="submit" class="btn btn-outline-primary mb-3" name="kirim">Kirim</button>
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