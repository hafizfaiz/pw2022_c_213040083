<?php
// Array Numerik
// Array yang index nya berasosiasi / berpasangan dengan angka

$mahasiswa = [

    ["Hafizh Faiz F", "213040083", "hafizh.213040083@unpas.mail.ac.id", "Teknik Informatika"],
    ["Putra RIzqi Pratama", "213040080", "putra.213040080@unpas.mail.ac.id", "Teknik Sipil"],
    ["Syahran Akbar Abdul Aziz","213040099", "syahran.213040099@mail.unpas.ac.id","Teknik Mesin" ]
];

//var_dump($mahasiswa [1][3]);
?>
<?php foreach($mahasiswa as $mhs) {?>
<ul>
    <li>Nama : <?php echo $mhs[0]; ?></li>
    <li>NPM : <?php echo $mhs[1]; ?></li>
    <li>Email : <?php echo $mhs[2]; ?></li>
    <li>Jurusan : <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>
