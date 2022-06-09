<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION['login'])) {
  header("Location: masuk.php");
  exit;
}

$id = $_GET["id"];
$brt = query("SELECT * FROM berita WHERE id=$id")[0];

if (isset($_POST['ubah'])) {  
    //cek apakah data berhasil di tambahkan atau tidak
    if ( ubah($_POST) > 0) {
        echo "
          <script>
            alert('data berhasil diubah!!');
            document.location.href = 'admin.php'
          </script>
        ";
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah data Mahasiswa</title>
  </head>
  <style>
 	.foto {
 		width: auto;
 		height: 50px;
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
          <a class="nav-link" href="#" style="color:white">About Us</a>
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
          <a type="button" href="logout.php" class="btn btn-danger mx-1">Log-Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
    <div class="container">
        <h1>Form Ubah data Mahasiswa</h1>

        <a href="admin.php" class="btn btn-primary">Kembali ke data berita</a>

        <div class="row mt-3">
          
          <div class="col-8">
            <form action="" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?= $brt["id"]?>">
              <div class="mb-3">
                <label for="judul" class="form-label">judul :</label>
                <input type="text" name="judul" class="form-control" id="judul" required value="<?= $brt["judul"]?>">
              </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi :</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" cols="50" required class="form-control"  ><?= $brt["deskripsi"]?></textarea>
              </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar :</label>
                <img src="img/<?php echo $brt["gambar"]; ?>" class=" mx-2 rounded-2 img-preview mb-4" width="120" style="display: block;" id="img-preview">
                <input type="file" name="gambar" class="form-control gambar" id="gambar" required value="" onchange="previewImage()">
              </div>
              <button type="submit" class="btn btn-sn btn-danger" name="ubah">Ubah data</button>
            </form>
          </div>

        </div>


    </div>

    <script src="js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>