<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Pertemuan 12
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

function login($data)
{
	$conn = koneksi();

	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);

	// cek dulu username
	if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

		// cek password
		if (password_verify($password, $user['password'])) {

		// set session
		$_SESSION['login'] = true;

		header("Location: index.php");
		exit;
		}
	}
	return [
		'error' => true, 
		'pesan' => 'Username / Password salah!'
	];	
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada 
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
  	echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password <15 digit
  if (strlen($password1) < 5) {
  	echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  // insert ke tabel user
  $query = "INSERT INTO user 
  				VALUES
  			(null, '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
 }
?>