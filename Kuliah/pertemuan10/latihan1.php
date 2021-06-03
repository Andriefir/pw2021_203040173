<?php 
/* 
	Mochammad Andrie Firmansyah
	203040173
	Pertemuan 10
	https://github.com/Andriefir/pw2021_203040173
*/
?>
<?php  
// Koneksi ke DB & Plih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040173');

// Querry isi tabel phones
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array	
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

// Tampung ke variabel mahasiswa
$mahasiswa = $rows;
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