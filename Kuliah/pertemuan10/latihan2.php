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
	<table border="1" cellpadding="10" cellspacing="0s">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Aksi</th>
		</tr>

		<?php $i = 1; 
		foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $mhs['Gambar']; ?>"></td>
			<td><?= $mhs['NRP']; ?></td>
			<td><?= $mhs['Nama']; ?></td>
			<td><?= $mhs['Email']; ?></td>
			<td><?= $mhs['Jurusan']; ?></td>
			<td>
				<a href="">ubah</a> | <a href="">hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>