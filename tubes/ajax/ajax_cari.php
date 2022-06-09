<?php 
require '../functions.php';
$keyword = ($_GET["keyword"]);
$query = "SELECT * FROM berita
  WHERE 
  judul LIKE '%$keyword%' OR
  deskripsi LIKE '%$keyword%' OR
  tanggal LIKE '%$keyword%'
  ";
$berita= query($query);
echo $keyword;
?>
        <table class="table table-bordered">
              <tr>
              <th scope="col">No.</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Tanggal</th>
              <th class="aksi" scope="col">Aksi</th>
              </tr>
              <?php $no = 1; foreach($berita as $brt) { ?>
                <tr>
                  <td> <?= $no++;  ?> </td>
                  <td> <img src="img/<?php echo $brt["gambar"]; ?>" style="width:100%;height:100%" ></td>
                  <td><?php echo $brt['judul'] ?></td>
                  <td><?php echo $brt['deskripsi'] ?></td>
                  <td><?php echo $brt['tanggal'] ?></td>
                  <td class="aksi">
                    <a href="ubah.php?id=<?= $brt["id"] ?>" class="ubah btn btn-sm text-white bg-warning";>Ubah</a>
                    <a href="hapus.php?id=<?= $brt["id"] ?>" class="hapus btn btn-sm text-white bg-danger" onclick="return confirm('YANG BENERRRRR????')";>Hapus</a>
                  </td>
                </tr>
                <?php } ?>
          </table>