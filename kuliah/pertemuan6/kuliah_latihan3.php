<?php 
$mahasiswa = [

    [
    "nama" => "Hafizh Faiz F", 
    "npm" => "213040083", 
    "email" => "hafizh.213040083@mail.unpas.ac.id", 
    "prodi" => "Teknik Informatika",
    "gambar" => "gambar1.jpg"
    ],
    [
    "nama" => "Putra RIzqi Pratama", 
    "npm" => "213040080", 
    "email" =>  "putra.213040080@mail.unpas.ac.id", 
    "prodi" => "Teknik Sipil",
    "gambar" => "gambar2.jpg"
    ],
    [
    "nama" => "Syahran Akbar Abdul Aziz", 
    "npm" => "213040099", 
    "email" =>  "syahran.213040099@mail.unpas.ac.id", 
    "prodi" => "Teknik Mesin",
    "gambar" => "gambar3.jpg"
    ]
];
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
                <td> <img src="img/<?php echo $mhs["gambar"]; ?>" class="rounded-circle foto" ></td>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['npm'] ?></td>
                <td><?php echo $mhs['email'] ?></td>
                <td><?php echo $mhs['prodi'] ?></td>
                <td>
                  <a href="#" class="btn btn-sm text-white bg-warning">Edit</a>
                  <a href="#" class="btn btn-sm text-white bg-danger">Delete</a>
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