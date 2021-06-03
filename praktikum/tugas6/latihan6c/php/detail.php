<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>
<?php 
//mengecek apakah  ada id yang di kirimkan
//jika tidak maka akan di kembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang di ambil dari url 
$phone = query("SELECT * FROM phones WHERE id = $Id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Latihan 5C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="Picture">
			<img src="../assets/img/<?= $phones["Picture"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $phones["Name"]; ?></p>
			<p><?= $phones["Brand"]; ?></p>
			<p><?= $phones["Deskripsi"]; ?></p>
			<p><?= $phones["Category"]; ?></p>
			<p><?= $phones["Price"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>
</html>