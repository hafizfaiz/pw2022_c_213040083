<?php 
require 'functions.php';

// query mahasiwa berdasarkan id
$id = $_GET["id"];
$brt = query("SELECT * FROM berita WHERE id=$id")[0];
// cek ketika tombol ubah di-klik
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
<header style="background-color: rgba(0, 141, 201, 0.9)">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <a href="/" class="d-flex align-items-center text-white text-decoration-none">
                        <svg  width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <div class="text-start me-lg-auto">   
                    <ul class="nav col-12 col-lg-auto justify-content-center " >
                        <img class="my-auto" src="img/healthlogo.png" height="32px">
                        <a class="nav-link text-white"  href="admin.php">Data Berita</a>
                        <a class="nav-link text-white"  href="tambah.php">Tambah Berita</a>
                    </ul>
                    </div>        
                    <div class="my-3 text-end ms-lg-auto ">
                        <button type="button" class="btn btn-outline-light">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
            </div>
        </div>
    </header>
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
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" required value="<?= $brt["deskripsi"]?>">
              </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar :</label>
                <input type="text" name="gambar" class="form-control" id="gambar" required value="<?= $brt["gambar"]?>">
              </div>
              <button type="submit" class="btn btn-sn btn-danger" name="ubah">Ubah data</button>
            </form>
          </div>

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
  </body>
</html>