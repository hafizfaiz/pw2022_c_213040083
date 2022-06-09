<?php 
session_start();
require 'functions.php';

if (!isset($_SESSION['login'])) {
  header("Location: masuk.php");
  exit;
}

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
    <a class="navbar-brand" href="#" style="color:white">
      <img src="img/healthlogo.png" alt="" width="30" height="30" style="margin-right:10px">CintaSehat
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color:white"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a type="button" href="logout.php" class="btn btn-danger mx-1">Log-Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
<!-- banner-->
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
        <img src="img/banner1.jpg" class="d-block img-fluid" alt="header1">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <h3 class="mb-5" style="background-color:rgba(0, 141, 201,0.8); color:white">BERITA KESEHATAN</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner3.jpg" class="d-block img-fluid" alt="header2">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <h3 class="mb-5" style="background-color:rgba(0, 141, 201,0.8); color:white">JANJI TEMU DENGAN DOKTER TERBAIK</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner5.jpg" class="d-block img-fluid" alt="header3">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <h3 class="mb-5" style="background-color:rgba(0, 141, 201,0.8); color:white">PEMBELIAN OBAT-OBATAN ONLINE</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner4.jpg" class="d-block img-fluid" alt="header3">
      <div class="card-img-overlay d-flex align-items-end justify-content-center">
        <h3 class="mb-5" style="background-color:rgba(0, 141, 201,0.8); color:white">PENJELASAN MENGENAI PENYAKIT-PENYAKIT</h3>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
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
                    <img src="img/<?= $brt["gambar"];?>" class="card-img img-responsive gambar" alt="...">
                  <div class="card-img-overlay d-flex align-items-end justify-content-center">
                    <p class="mb-5 " style="background-color:rgba(0, 141, 201,0.8); color:white"><?= $brt["judul"];?></p>
                  </div>
                  <div class="card-img-overlay d-flex align-items-end justify-content-start">
                    <a type="button" class="btn" style=" background-color:rgb(0, 141, 201); color:white" href="newspage.php?id=<?= $brt["id"]; ?>">Selengkapnya</a>
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
<div class="container mb-5 pb-3"> 
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
            <a type="button" class="btn" style=" background-color:rgb(0, 141, 201); color:white" href="petasebaran.php">Selengkapnya</a>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- content -->
<hr>
<div class="container ">
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col">
        <div class="card mt-3 mx-3 border-0 my-5" style="width: 20rem;">
          <img src="img/pusatkesehatan.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Keluhan</h5>
            <p class="card-text">form untuk mengirimkan informasi mengenai keluhan penyakit yang diderita.</p>
            <a href="keluhan.php" class="btn btn-primary">selengkapnya</a>
          </div>
        </div>
        </div>
        <div class="col">
        <div class="card mt-3 mx-3 border-0 my-5" style="width: 20rem;">
          <img src="img/obat.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Obat</h5>
            <p class="card-text">Pembelian obat-obatan online.</p>
            <a href="obat.php" class="btn btn-primary">selengkapnya</a>
          </div>
        </div>
        </div>
        <div class="col">
        <div class="card mt-3 mx-3 border-0 my-5" style="width: 20rem;">
          <img src="img/penyakit.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Penyakit</h5>
            <p class="card-text">30 Jenis Penyakit yang bisa menular, penyebab dan pencegahan.</p>
            <a href="penyakit.php" class="btn btn-primary">selengkapnya</a>
          </div>
        </div>
        </div>
    </div>
  </div>
  </div>
</div>
<!-- deskripsi -->
<hr>
<div div class="container mb-5 pb-3" style="max-width: 1400px"> 
  <h3 class="text-center mb-5">PLATFORM KESEHATAN DENGAN FITUR TERLENGKAP</h3>
  <p>Cintasehat adalah platform kesehatan terbaik dengan fitur terlengkap di Indonesia yang selalu hadir memberikan tips dan informasi terbaru mengenai kesehatan. Situs kesehatan ini sukses diluncurkan pada 2016 dan berada dalam naungan PT Global Urban Esensial. CintaSehat menjadi produk pertama tentang kesehatan yang memiliki fitur terlengkap di Indonesia.</p>
  <p>Di sini Kamu dapat membaca berbagai artikel tentang kesehatan, mulai dari tema wanita, medis, hubungan percintaan dan seks, hingga gaya hidup sehat. Tak perlu takut hoax, karena semua artikel ini berasal dari sumber terpercaya dan direview oleh pakar kesehatan.</p>
  <p>Sehat itu seru lho, apalagi kalau sehatnya bareng-bareng. Website kesehatan ini memiliki banyak fitur yang unik dan menarik untuk mendukung kesehatanmu. Melalui fitur sakit apa, Kamu dapat melakukan cek kesehatan secara online. Kemudian, cari tahu tentang penyakit tersebut, mulai dari pengertian penyakit, gejala, hingga cara pencegahan di fitur penyakit. Setelah itu, lakukan penanganan yang tepat dengan mengonsumsi obat sesuai anjuran di fitur info obat.</p>
  <p>Khusus untuk Kamu para wanita, CintaSehat sangat mengerti kecemasanmu. Kamu dapat melakukan kontrol terhadap berat badanmu dengan menghitung Indeks Massa Tubuh (IMT) secara cepat di fitur hitung kalori dan IMT. Selain itu, pantau siklus haidmu untuk mendapatkan perhitungan yang tepat guna terciptanya kehamilan di fitur siklus haid. Kemudian jika Mums sudah hamil dan melahirkan, ketahui perkembangan si Kecil melalui fitur kehamilan lalu berlanjut ke fitur tumbuh kembang dan imunisasi.</p>
  <p>Sesuai dengan visi dan misi CintaSehat, platform kesehatan ini merupakan awal dari gerakan positif untuk mengajak masyarakat Indonesia menyadari jika sehat itu mudah. Yuk, jadi bagian dari visi ini!</p>
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