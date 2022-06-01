<?php 
require 'functions.php';
$berita = query("SELECT * FROM berita");


// query sesuai dengan keyword pencarian, ketika tombol di-klik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM berita
  WHERE 
  judul LIKE '%$keyword%' OR
  deskripsi LIKE '%$keyword%' OR
  tanggal LIKE '%$keyword%'
  ";

  $berita = query($query);
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

    <title>Daftar berita</title>
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
                        <button type="button" class="btn btn-outline-light">Masuk</button>
                        <button type="button" class="btn btn-warning">Daftar</button>
                    </div>
            </div>
        </div>
    </header>
<!-- navbar -->
    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <form action="" method="get" >
          <div type="text" class="input-group mb-3 mt-4">
            <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off">
            <button typer="submit" class="btn btn-primary" name="cari">Cari! </button>
            <a href="admin.php" class="btn btn-danger">reset</a>
          </div>
        </form>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($berita as $brt) { ?>
              <tr>
                <td> <?= $no++;  ?> </td>
                <td> <img src="img/<?php echo $brt["gambar"]; ?>" style="width:50%;height:50%" ></td>
                <td><?php echo $brt['judul'] ?></td>
                <td><?php echo $brt['deskripsi'] ?></td>
                <td><?php echo $brt['tanggal'] ?></td>
                <td >
                  <a href="ubah.php?id=<?= $brt["id"] ?>" class="btn btn-sm text-white bg-warning";>Ubah</a>
                  <a href="hapus.php?id=<?= $brt["id"] ?>" class="btn btn-sm text-white bg-danger" onclick="return confirm('YANG BENERRRRR????')";>Hapus</a>
                </td>
              </tr>
              <?php } ?>
        </tbody>
        </table>
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