<?php 
require 'function.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['tambah'])) {	
    //cek apakah data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0) {
        echo "
        	<script>
        		alert('data berhasil ditambahkan!!');
        		document.location.href = 'kuliah_latihan1.php'
        	</script>
        ";
    } else {
        echo "
        	<script>
        		alert('data gagal ditambahkan!!');
        		document.location.href = 'kuliah_latihan1.php'
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
        <h1>Form Data Mahasiswa</h1>
        <a href="index.php" class="btn btn-dark">Kembali ke Daftar Mahasiswa</a>


	<div class="row">
	 <div class="col-8">
		<form action="" method="post">

		<div class="mb-3">
	 	<label for="nama" class="form-label">Nama</label>
		<input type="text" class="form-control" id="nama" name="nama" required>
	 	</div>

		<div class="mb-3">
	 	<label for="npm" class="form-label">Npm</label>
		<input type="number" class="form-control" id="npm" name="npm" required style="width:130px">
	 	</div>

		<div class="mb-3">
	 	<label for="email" class="form-label">Email</label>
		<input type="email" class="form-control" id="email" name="email" required>
	 	</div>

		<div class="mb-3">
	 	<label for="jurusan" class="form-label">Jurusan</label>
		<input type="text" class="form-control" id="jurusan" name="jurusan">
	 	</div>

		<div class="mb-3">
	 	<label for="gambar" class="form-label">Gambar</label>
		<input type="text" class="form-control" id="gambar" name="gambar">
	 	</div>
	 <button class="btn btn-primary"type="submit" name="tambah">Tambah Data</button>
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