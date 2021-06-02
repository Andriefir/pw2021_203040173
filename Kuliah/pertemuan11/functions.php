<?php 
/* 
	Mochammad Andrie Firmansyah
	203040173
	Pertemuan 11
	https://github.com/Andriefir/pw2021_203040173
*/
?>

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
	if (mysqli_num_rows($result) == 1) {
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
	$NRP = htmlspecialchars($data['NRP']);
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

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_query($conn));
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();

	$id = ($data['id']);
	$Gambar = htmlspecialchars($data['Gambar']);
	$Nama = htmlspecialchars($data['Nama']);
	$NRP = htmlspecialchars($data['NRP']);
	$Email = htmlspecialchars($data['Email']);
	$Jurusan = htmlspecialchars($data['Jurusan']);

	$query = "UPDATE mahasiswa SET
				Nama = '$Nama',
				NRP = '$NRP',
				Email = '$Email',
				Jurusan = '$Jurusan',
				Gambar = '$Gambar'
				WHERE id = $id";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
              WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%'
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
?>