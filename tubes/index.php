<?php 
require 'functions.php';
$berita = query("SELECT * FROM berita");
// query sesuai dengan keyword pencarian, ketika tombol di-klik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM berita 
  WHERE 
  judul LIKE '%$keyword%' OR
  deskripsi LIKE '%$keyword%'
  ";

  $berita = query($query);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Situs Kesehatan Indonesia</title>
    <!-- css -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md" style="background-color: rgb(0, 141, 201)">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/healthlogo.png" alt="" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color:white"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color:white">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php" style="color:white">Berita</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a type="button" href="registrasi.php" class="btn btn-warning">Daftar</a>
        </li>
        <li class="nav-item">
          <a type="button" href="masuk.php" class="btn btn-primary">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
<!-- awal carousel -->
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" 
        class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" 
        ria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" 
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" 
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.jpg" class="d-block img-fluid" alt="header1">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner3.jpg" class="d-block img-fluid" alt="header2">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner.jpg" class="d-block img-fluid" alt="header3">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner2.jpg" class="d-block img-fluid" alt="header3">
      <div class="card-img-overlay d-flex align-items-end justify-content-center">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
</div>
<!-- akhir carousel -->
<!-- carousel -->
<div class="container mb-5 pb-5" style="max-width: 1296px;">
  <div class="card-group">
    <table class="table">
      <tr>
        <th style="padding-top:15vh"><h3>Informasi Penting Untuk Kamu</h3></th>
      </tr>
    </table>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($berita as $brt) { ?>
            <div class="col">
                <div class="card bg-dark text-white">
                    <img src="img/<?= $brt["gambar"]?>" class="card-img img-responsive gambar" alt="...">
                  <div class="card-img-overlay d-flex align-items-end justify-content-center">
                    <p class="mb-5 " style="background-color:rgba(0, 141, 201,0.8); color:white"><?= $brt["judul"]?></p>
                  </div>
                  <div class="card-img-overlay d-flex align-items-end justify-content-start">
                    <button type="button" class="btn" style=" background-color:rgb(0, 141, 201); color:white">Selengkapnya</button>
                    <p style="padding-left:20px;"><h4 style="-webkit-text-stroke: 0.3px black;"><?= date('d-m-Y',strtotime($brt['tanggal']))?></h4></p>
                  </div>
                </div>
            </div>
        <?php }?>     
    </div>
  </div>
</div>
<!-- carousel -->
<!-- content -->
<hr>
<div class="container mb-5 pb-3" style="max-width: 1400px;"> 
  <div class="row mt-5 mb-2 title">
    <div class="col-12">
      <h1>Data Sebaran Covid-19</h1>
    </div>
  </div> 
  <div class="row">
    <div class="col-sm-9">
      <div class="row mt-3 mb-3">
          <div class="col-sm-12 card-title">
            <h3>Indonesia</h3>
            <p> Update Terakhir: 30-05-2022
            </p>
          </div>
          <div class="col-sm-4">                    
            <div class="card text-dark bg-warning">
              <div class="card-indonesia mt-3 mx-3" style="color:white">
                <h2>6.054.633</h2>
                <p>Positif</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-dark bg-warning">
              <div class="card-indonesia mt-3 mx-3" style="color:white">
                <h2>5.895.423</h2>
                <p>Sembuh</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-dark bg-warning">
              <div class="card-indonesia mt-3 mx-3" style="color:white">
                <h2>156.591</h2>
                <p>Meninggal Dunia</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  <div class="col-md-3 main-card-covid-desktop align-self-end">
   <div class="card text-dark bg-info">
       <div class="card-covid mt-3 mx-3 mb-3">
           <div style="color:white">
            <h2>Situasi Virus</h2>
            <h2>COVID-19</h2>
            <h2 class="mb-2">di Indonesia</h2>
            <button type="button" class="btn" style=" background-color:rgb(0, 141, 201); color:white">Selengkapnya</button>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- content -->
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