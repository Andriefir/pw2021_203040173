<?php 
/* 
	Mochammad Andrie Firmansyah
	203040173
	Pertemuan 10
	https://github.com/Andriefir/pw2021_203040173
*/
?>

<?php  
require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	
	<h3>Detail Mahasiswa</h3>

	<ul>
		<li><img src="img/<?= $mhs['Gambar']; ?>"></li>
		<li>NRP : <?= $mhs['NRP']; ?></li>
		<li>Nama : <?= $mhs['Nama']; ?></li>
		<li>Email : <?= $mhs['Email']; ?></li>
		<li>Jurusan : <?= $mhs['Jurusan']; ?></li>
		<li><a href="">ubah</a> | <a href="">hapus</a></li>
		<li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
	</ul>

</body>
</html>