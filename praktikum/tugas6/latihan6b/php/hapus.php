<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>
<?php

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
				alert('Data Berhasil dihapus!');
				document.location.href = 'admin.php';
			</script>";
} else {
	echo "<script>
				alert('Data Gagal dihapus!');
				document.location.href = 'admin.php';
			</script>";
}
?>