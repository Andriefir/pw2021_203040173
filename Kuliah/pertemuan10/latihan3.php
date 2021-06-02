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
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
  	<br><br>
  	
	<table border="1" cellpadding="10" cellspacing="0s">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>

		<?php $i = 1; 
		foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $mhs['Gambar']; ?>"></td>
			<td><?= $mhs['Nama']; ?></td>
			<td>
				<a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>