<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: masuk.php");
  exit;
}
require 'functions.php';
$berita = query("SELECT * FROM berita");


if(isset($_GET["cari"])) {
  $keyword = ($_GET["keyword"]);
  $query = "SELECT * FROM berita
  WHERE 
  judul LIKE '%$keyword%' OR
  deskripsi LIKE '%$keyword%' OR
  tanggal LIKE '%$keyword%'
  ";

  $berita = query($query);
}
if(isset($_POST["urutkan"])) {
  $berita = query("SELECT * FROM berita ORDER BY judul ASC");
}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar berita</title>
  </head>
  <style>
   @media print {
    .logout, .ubah, .hapus, .aksi, .cari{
      display:none;
    }
   }
 </style>
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
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexadmin.php" style="color:white">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"  href="admin.php">Data Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white"  href="tambah.php">Tambah Berita</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a type="button" href="logout.php" class="logout btn btn-danger mx-1">Log-Out</a> | <a class="btn btn-primary mx-1" href="print/cetak.php" target="_black">Cetak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
    <div class="container">
        <h1>Daftar Berita</h1>
        <form action="" method="post" >
          <div type="text" class="input-group mb-3 mt-4">
            <input type="text"id="keyword" name="keyword" class="cari form-control" placeholder="Masukan keyword pencarian.." autocomplete="off"
            autofocus >
            <button type="submit" name="urutkan" class="cari btn btn-danger">urutkan</button>
            <a href="admin.php" class="cari btn btn-danger">reset</a>
          </div>
        </form>
        <div id="ajax">
          <table class="table table-bordered">
              <tr>
              <th scope="col">No.</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Tanggal</th>
              <th class="aksi" scope="col">Aksi</th>
              </tr>
              <?php $no = 1; foreach($berita as $brt) { ?>
                <tr>
                  <td> <?= $no++;  ?> </td>
                  <td> <img src="img/<?php echo $brt['gambar']; ?>" style="width:100%;height:100%" ></td>
                  <td><?php echo $brt['judul'] ?></td>
                  <td><?php echo $brt['deskripsi'] ?></td>
                  <td><?php echo $brt['tanggal'] ?></td>
                  <td class="aksi">
                    <a href="ubah.php?id=<?= $brt["id"] ?>" class="ubah btn btn-sm text-white bg-warning";>Ubah</a>
                    <a href="hapus.php?id=<?= $brt["id"] ?>" class="hapus btn btn-sm text-white bg-danger" onclick="return confirm('YANG BENERRRRR????')";>Hapus</a>
                  </td>
                </tr>
                <?php } ?>
          </table>
        </div>
      </div>
      
      <!-- Optional JavaScript; choose one of the two! -->
      
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" >
      var keyword = document.getElementById('keyword');
      var tombolCari = document.getElementById('tombol-cari');
      var ajax= document.getElementById('ajax');

      keyword.addEventListener('keyup', function(){
    
      const xhr = new XMLHttpRequest ();
      xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            ajax.innerHTML = xhr.responseText;
        }
    }

    xhr.open('get','ajax/ajax_cari.php?keyword=' + keyword.value);
    xhr.send();
});</script>
  </body>
</html>