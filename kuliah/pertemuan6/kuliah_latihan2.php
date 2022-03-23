<?php 
// array associative
// array yang indexnya string

$mahasiswa = [

    [
    "nama" => "Hafizh Faiz F", 
    "npm" => "213040083", 
    "email" => "hafizh.213040083@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika"
    ],
    [
    "nama" => "Putra RIzqi Pratama", 
    "npm" => "213040080", 
    "email" =>  "putra.213040080@mail.unpas.ac.id", 
    "jurusan" => "Teknik Sipil"
    ]
];
//  var_dump($mahasiswa [1],"nama");
?>
<?php foreach($mahasiswa as $mhs) {?>
<ul>
    <li>Nama : <?php echo $mhs["nama"]; ?></li>
    <li>NPM : <?php echo $mhs["npm"]; ?></li>
    <li>Email : <?php echo $mhs["email"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>
<hr>
<ul>
<?php foreach( $mahasiswa as $mhs ) { ?>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
        <?php } ?>
<?php } ?>
</ul>