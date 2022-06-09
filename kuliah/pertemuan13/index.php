<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


// query sesuai dengan keyword pencarian, ketika tombol di-klik
if(isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM mahasiswa 
  WHERE 
  nama LIKE '%$keyword%' OR
  npm LIKE '%$keyword%' OR
  email LIKE '%$keyword%' OR
  jurusan LIKE '%$keyword%'
  ";

  $mahasiswa = query($query);
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

    <title>Daftar Mahasiswa</title>
  </head>
  <style>
 	.foto {
 		width: auto;
 		height: 50px;
 	}
 </style>
  <body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <a href="tambah.php" class="btn btn-primary">Tambah data mahasiswa</a>

        <form action="" method="get" >
          <div type="text" class="input-group mb-3 mt-4">
            <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off">
            <button typer="submit" class="btn btn-primary" name="cari">Cari! </button>
            <a href="index.php" class="btn btn-danger">reset</a>
          </div>
        </form>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Npm</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($mahasiswa as $mhs) { ?>
              <tr>
                <td scope="row"> <?= $no++;  ?> </td>
                <td> <img src="img/<?= $mhs["gambar"]; ?>" class="rounded-circle foto" ></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
                <td>
                  <a href="ubah.php?id=<?= $mhs["id"] ?>" class="btn btn-sm text-white bg-warning";>Ubah</a>
                  <a href="hapus.php?id=<?= $mhs["id"] ?>" class="btn btn-sm text-white bg-danger" onclick="return confirm('YANG BENERRRRR????')";>Hapus</a>
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