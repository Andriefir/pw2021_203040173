<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'functions.php';
// Melakukan query
$phones = query("SELECT * FROM phones");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 5A</title>
</head>
<body>
	<div class="container" style="background-color: #FFFFE0 ;">
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
		<?php $i = 1; ?>
		<?php foreach ($phones as $phone) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href=""><button style="background-color: #7FFFD4 ;">Ubah</button></a>
					<a href=""><button style="background-color:  #7FFF00  ;">Hapus</button></a>
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
	</table>
	</div>
</body>
</html> 