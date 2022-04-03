<?php 
// SUPERGLOBAALS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya Array Asociative 
// $_GET
// $_POST
// $_SERVER
// $_GET ["nama"] = "hafizh";
// $_GET ["email"] = "Hafizh.213040083@mail.unpas.ac.id";

// var_dump($_GET);
// var_dump($_POST);
if(isset ($_GET["nama"])) {
    $nama = $_GET ["nama"];
} else {
    $nama = 'Welcome';
}
?>
<h1>Hallo, <?= $nama;  ?></h1>
<ul>
    <li>
        <a href="?nama=Hafizh">Hafizh</a>
    </li>
    <li>
        <a href="?nama=Syahran">Syahran</a>
    </li>
    <li>
        <a href="?nama=Fasya">Fasya</a>
    </li>
</ul>

