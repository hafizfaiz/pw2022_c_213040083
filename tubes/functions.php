<?php 
function koneksi() {
	$conn = mysqli_connect("localhost", "root", "", "berita") or die('Connections_failed');
	return $conn;
}

function query($query) {
	$conn = koneksi();
	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
 } 
 return $rows;
}

function tambah($data) {
	$conn = koneksi();
	//ambil data dari tiap elemen dalam form
	$judul = htmlspecialchars($data["judul"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambar = htmlspecialchars($data["gambar"]);
	$banner = htmlspecialchars($data["banner"]);
	 //query insert data
	 $query = "INSERT INTO berita
				VALUES
				 ('', '$gambar', '$banner', CURRENT_TIMESTAMP,'$judul', '$deskripsi')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);

}


function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM berita Where id=$id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function ubah($data){
	$conn = koneksi();
	//ambil data dari tiap elemen dalam form
	$id= $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambar = htmlspecialchars($data["gambar"]);

	//query insert data
	$query = "UPDATE berita SET 
				judul = '$judul',
				deskripsi = '$deskripsi',
				gambar= '$gambar',
				banner= '$banner'
				WHERE id = $id";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}
function registrasi($data) {
	$conn = koneksi();

	$username = htmlspecialchars(strtolower(stripslashes($data["username"])));
	$email = htmlspecialchars($data["email"]);
	$password = htmlspecialchars(mysqli_real_escape_string($conn, $data["password"]));
	
	 //query insert data
	 $query = "INSERT INTO user
				VALUES
				 ('', '$username', '$email','$password')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return 1;
}
?>