<?php 
session_start();

if(!isset($_SESSION['login'])) {
  header("Location: masuk.php");
  exit;
}
require "functions.php";

if (hapus($_GET["id"]) > 0) {
    echo "
      <script>
        alert('data berhasil dihapus!!');
        document.location.href = 'admin.php';
      </script>
    ";
}

?>