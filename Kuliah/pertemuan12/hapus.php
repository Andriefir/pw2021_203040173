<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Pertemuan 12
  https://github.com/Andriefir/pw2021_203040173
*/
?>

<?php 
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengamnil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'index.php';
		</script>";
} else {
	echo "data gagal ditambahkan!";
}
?>