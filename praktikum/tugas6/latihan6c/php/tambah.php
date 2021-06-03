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

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
					alert('Data Berhasil ditambahkan!');
					document.location.href = 'admin.php';
				</script>";	
	} else {
		echo "<script>
					alert('Data Gagal ditambahkan!');
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
	<h3>Form Tambah Data Handphone</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="picture">Picture :</label><br>
				<input type="text" name="Picture" id="picture" required><br><br>
			</li>
			<li>
				<label for="name">Name :</label><br>
				<input type="text" name="Name" id="name" required><br><br>
			</li>
			<li>
				<label for="brand">Brand :</label><br>
				<input type="text" name="Brand" id="brand" required><br><br>
			</li>
			<li>
				<label for="deskripsi">Deskripsi :</label><br>
				<input type="text" name="Deskripsi" id="deskripsi" required><br><br>
			</li>
			<li>
				<label for="category">Category :</label><br>
				<select name="Category" id="category" required>
					<option value="">-------- Pilih Category --------</option>
					<option value="Low-End">Low-End</option>
					<option value="Middle-Range">Middle-Range</option>
					<option value="High-End">High-End</option>
				</select>
			</li>
			<br>
			<li>
				<label for="price">Price :</label><br>
				<input type="text" name="Price" id="price" required><br><br>
			</li>
			<button type="submit" name="tambah">Tambah Data!</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>