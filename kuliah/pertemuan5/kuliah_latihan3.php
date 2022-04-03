<?php 
$mahasiswa = [
	["Hafizh Faiz Fadhlurrahman", "213040083", "Teknik Informatika", "hafizh.213040083@unpas.ac.id"],
	["Syahran Akbar Abdul Aziz", "213040099", "Teknik Informatikai", "syahran.213040099@unpas.ac.id"],
	["Putra Rizki Pratama", "213040080", "Teknik Informatikai", "syahran.213040099@unpas.ac.id"]
];

?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <body>

            <h1> Daftar Mahasiswa</h1>

            <ul>
                <!-- <li>Nadilla Ananda</li>
                <li>213040076</li>
                <li>Teknik Informatika</li>
                <li>nputriananda21@gmail.com</li> -->

                <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
                    <li><?= $mhs; ?></li>
                <?php endforeach; ?> -->

                <!-- <li><?= $mahasiswa[0]; ?></li>
                <li><?= $mahasiswa[1]; ?></li>
                <li><?= $mahasiswa[2]; ?></li>
                <li><?= $mahasiswa[3]; ?></li> -->
                
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <li>Nama : <?= $mhs[0]; ?></li>
                <li>NRP : <?= $mhs[1]; ?></li>
                <li>Jurusan : <?= $mhs[2]; ?></li>
                <li>Email : <?= $mhs[3]; ?></li>

            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>