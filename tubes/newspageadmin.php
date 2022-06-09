<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: masuk.php");
  exit;
}
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$brt = query("SELECT * FROM berita WHERE id = $id")[0];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
  </div>
</nav>
<!-- navbar -->
<!-- deskripsi -->
<a href="indexadmin.php">Kembali</a>
<div div class="container mt-5" style="max-width: 1200px">
  <img class="card-img img-responsive gambar" src="img/<?= $brt["banner"]; ?>" >
<h1 class="text-center"><?= $brt["judul"];?></h1>
<p class="text-center"><?= $brt["deskripsi"];?></p>
  </div>
<!-- deskripsi -->
<!-- Footer -->
<div class="container">

  <footer class="bg-light p-5 mt-5" style="max-width: 1400px">
          <div class="container">
            <div class="row">
              <div class="col-md-6 text-md-start text-center pt-2 pb-2">
                <a href="#">
                  <img src="img/healthlogo.png" style="width: 30px;">
                </a>
                <span>Copyright @2022 | created by Cinta Sehat</span>
              </div>
              <div class="col-md-6 text-md-end text-center pt-2 pb-2">
                <a href="#">
                  <img src="img/whatsapp.png" class="ms-2" style="width: 30px;">
                </a>
  
                <a href="#">
                  <img src="img/instagram.png" class="ms-2" style="width: 30px;">
                </a>
              </div>
            </div>
          </div>
        </footer>
</div>
      <!-- akhir footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>