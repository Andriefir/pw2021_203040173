<?php  

function koneksi()
{
	return mysqli_connect('localhost', 'root', '', 'pw_203040173');
}

function query($query)
{
	$conn = koneksi();

	$result = mysqli_query($conn, $query);

	// Jika hasilnya hanya 1 data
	if(mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data)
{
	$conn = koneksi();

	$Gambar = htmlspecialchars($data['Gambar']);
	$Nama = htmlspecialchars($data['Nama']);
	$NRP = htmlspecialchars($data['nrp']);
	$Email = htmlspecialchars($data['Email']);
	$Jurusan = htmlspecialchars($data['Jurusan']);

	$query = "INSERT INTO
	            mahasiswa
	            VALUES
	          (null, '$Gambar', '$Nama', '$NRP', '$Email', '$Jurusan');
	          ";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}
?>