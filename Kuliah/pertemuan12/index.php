<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Jumat 13.00
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
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
	$mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h3>Daftar Mahasiswa</h3>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
  	<br><br>

  	<form action="" method="POST">
  		<input type="text" name="keyword" size="30" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus>
  		<button type="submit" name="cari">Cari!</button>
  	</form>
  	<br>

	<table border="1" cellpadding="10" cellspacing="0s">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>

		<?php if(empty($mahasiswa)) : ?>
		<tr>
			<td colspan="4">
				<p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
			</td>
		</tr>
		<?php endif; ?>

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