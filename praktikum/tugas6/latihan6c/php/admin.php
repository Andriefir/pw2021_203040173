<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>

<?php 
session_start();

if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

// Menghubungkan dengan file php lainnya
require 'functions.php';

//ketika tombol cari di klik
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $phones = query("SELECT * FROM phones
      WHERE
    Name LIKE '%$keyword%' OR
    Brand LIKE '%$keyword%' OR
    Deskripsi LIKE '%$keyword%' OR
    Category LIKE '%$keyword%' OR
    Price LIKE '%$keyword%' 
    ");

} else {
  $phones = query("SELECT * FROM phones");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 6C</title>
</head>
<body>
	<div class="container" style="background-color: #FFFFE0 ;">
	<div class="add">
		<a href="tambah.php"><button style="background-color: #7FFFD4 ;">Tambah Data</button></a>
		<br><br>
	</div>

	<form action="" method="get">
		<input type="" name="keyword" autofocus>
		<button type="submit" name="cari">Cari!</button><br><br>
	</form>

	<div class="logout">
		<a href="logout.php">Logout</a>
	</div>

	<table border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>#</th>
			<th>opsi</th>
			<th>Picture</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Deskripsi</th>
			<th>Category</th>
			<th>Price</th>
		</tr>
		
	<?php if (empty($phones)) : ?>
		<tr>
			<td colspan="7">
				<h1>Data tidak ditemukan</h1>
			</td>
		</tr>	
	<?php else : ?>
		<?php $i = 1; ?>
		<?php foreach ($phones as $phone) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
                    <a href="ubah.php?id=<?= $phone["id"]; ?>"><button style="background-color: #7FFFD4 ;">Ubah</button></a>
                    <a href="hapus.php?id=<?= $phone["id"]; ?>" onclick="return confirm('Hapus Data??');"><button style="background-color:  #7FFF00  ;">Hapus</button></a>
                </td>
				<td><img src="../assets/img/<?= $phone["Picture"]; ?>" alt=""></td>
				<td><?= $phone ['Name']; ?></td>
				<td><?= $phone ['Brand']; ?></td>
				<td><?= $phone ['Deskripsi']; ?></td>
				<td><?= $phone ['Category']; ?></td>
				<td><?= $phone ['Price']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>	
	</table>
	</div>
</body>
</html> 