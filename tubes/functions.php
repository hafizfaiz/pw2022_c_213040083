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
function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM berita Where id=$id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function ubah($data){
	$conn = koneksi();

	$id= $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambar = htmlspecialchars($data["gambar"]);
	

	$query = "UPDATE berita SET 
				judul = '$judul',
				deskripsi = '$deskripsi',
				gambar= '$gambar',
				banner= '$banner'
				WHERE id = $id";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	return mysqli_affected_rows($conn);
}

function tambah($data) {
	$conn = koneksi();

	$judul = htmlspecialchars($data["judul"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambar = htmlspecialchars($data["gambar"]);
	$banner = htmlspecialchars($data["banner"]);

	 $query = "INSERT INTO berita
				VALUES
				 ('', '$gambar', '$banner', CURRENT_TIMESTAMP,'$judul', '$deskripsi')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);

}
function keluhan($data) {
	$conn = koneksi();
	
	$nama = htmlspecialchars($data["nama"]);
	$notelp = htmlspecialchars($data["notelp"]);
	$jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$keluhan = htmlspecialchars($data["keluhan"]);
	
	$query = "INSERT INTO keluhan
				VALUES
				 ('', '$nama', '$notelp','$jeniskelamin','$alamat', '$keluhan')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	return mysqli_affected_rows($conn);

}

function login($data){
	$conn = koneksi();

	$username=$_POST['username'];
	$password=$_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);
	if( password_verify($password, $row["password"]) ) {

		$_SESSION["login"] = true;


		if( isset($_POST['remember']) ) {

			setcookie('id', $row['id'], time()+60);
			setcookie('key', hash('sha256', $row['username']), time()+60);
		}

		header("Location: index.php");
		exit;
	}else if($username = 'admin' && $password = '12345') {
		$_SESSION["login"] = true;
		header("Location: indexadmin.php");
		exit;
	}
}
function registrasi($data) {
	$conn = koneksi();

	$username = htmlspecialchars($data['username']);
	$password1 = mysqli_real_escape_string($conn, $data['password1']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

if(empty($username) || empty($password1) || empty($password2)) {
	echo "<script>
	alert('username/password tidak boleh kosong!');
	document.location.href = 'registrasi.php';
	</script>";
	return false;
}
if(query("SELECT * FROM user WHERE username = '$username'")) {
	echo "<script>
	alert('username sudah terdaftar!');
	document.location.href = 'registrasi.php';
	</script>";
	return false;
}
if($password1 !== $password2) {
	echo "<script>
	alert('konfirmasi password tidak sesuai!');
	document.location.href = 'registrasi.php';
	</script>";
	return false;
}
if(strlen($password1) < 5) {
	echo "<script>
	alert('password terlalu pendek(minimal 6 huruf)!');
	document.location.href = 'registrasi.php';
	</script>";
	return false;
}
$password_baru = password_hash($password1, PASSWORD_DEFAULT);
	$query = "INSERT INTO user VALUES (null,'$username','$password_baru')";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}
?>