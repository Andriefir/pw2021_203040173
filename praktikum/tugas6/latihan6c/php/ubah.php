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
 
require 'functions.php';

//Mengambil id dari url
$id = $_GET["id"];

//melakukan query dengan parameter id yang di ambil dari url
$phone = query("SELECT * FROM phones WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('Data Berhasil diubah!');
					document.location.href = 'admin.php';
				</script>";	
	} else {
		echo "<script>
					alert('Data Gagal diubah!');
					document.location.href = 'admin.php';
				</script>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 5C</title>
</head>
<body>
	<h3>Form Ubah Data Handphone</h3>
	<form action="" method="post">
		<ul>
			<input type="hidden" name="id" id="id" value="<?= $phone['id']; ?>">
			<li>
				<label for="picture">Picture :</label><br>
				<input type="text" name="Picture" id="picture" required value="<?= $phone['Picture']; ?>"><br><br>
			</li>
			<li>
				<label for="name">Name :</label><br>
				<input type="text" name="Name" id="name" required value="<?= $phone['Name']; ?>"><br><br>
			</li>
			<li>
				<label for="brand">Brand :</label><br>
				<input type="text" name="Brand" id="brand" required value="<?= $phone['Brand']; ?>"><br><br>
			</li>
			<li>
				<label for="deskripsi">Deskripsi :</label><br>
				<input type="text" name="Deskripsi" id="deskripsi" required value="<?= $phone['Deskripsi']; ?>"><br><br>
			</li>
			<li>
				<label for="category">Category :</label><br>
				<select name="Category" id="category" required value="<?= $phone['Category']; ?>">
					<option value="">-------- Pilih Category --------</option>
					<option value="Low-End">Low-End</option>
					<option value="Middle-Range">Middle-Range</option>
					<option value="High-End">High-End</option>
				</select>
			</li>
			<br>
			<li>
				<label for="price">Price :</label><br>
				<input type="text" name="Price" id="price" required value="<?= $phone['Price']; ?>"><br><br>
			</li>
			<button type="submit" name="ubah">Ubah Data!</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>