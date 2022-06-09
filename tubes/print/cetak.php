<?php 
require_once __DIR__ . '/vendor/autoload.php';

require '../functions.php';
$berita = query("SELECT * FROM berita");
$tabel = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
</head>
<body>
<h1>Daftar Berita </h1>
<table border="1" cellpadding="10" cellspacing="0">
              <tr>
              <th scope="col">No.</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Tanggal</th>
              </tr>';
foreach ($berita as $brt) {
    $tabel .='<tr>
    <td>'. $i++ .'</td>
    <td><img src="img/'. $brt['gambar'] .'"> </td>
    <td>'.$brt['judul'].'</td>
    <td>'.$brt['deskripsi'].'</td>
    <td>'.$brt['tanggal'].'</td>
    </tr>';
}
$tabel .='</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($tabel);
$mpdf->Output();

?>
