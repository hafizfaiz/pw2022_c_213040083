<?php 

?>
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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
  </div>
</nav>
<!-- navbar -->
<!-- Awal Form register --> 
<div class="container mt-5 pt-5 mb-5">
        <form class="form-container border rounded">
        <h1 class="title-name ms-3 pt-3 mb-5 text-center">Masuk</h1>
    <div class="row justify-content-center mb-5 mx-3">
        <div class="col-md-7">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="E-mail">
                    </div>
                </div>
            </div>
        <div class="col-md-7">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Password">
                    </div>
                    <div class="mt-2">
                <label>Kamu Belum Punya Akun? <a href="daftar.php" class="text-link">Daftar Disini</a></label>
                </div>
                </div>
    <div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 d-grid">
                        <button type="submit" class="btn btn-outline-primary mb-3">Masuk</button>
                </div>
            </div>
        </form>
        </div>

    <!-- Akhir Form register -->
</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</html>