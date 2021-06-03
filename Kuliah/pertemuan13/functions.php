<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Pertemuan 13
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

function upload()
{
	$nama_file = $_FILES['Gambar']['name'];
	$tipe_file = $_FILES['Gambar']['type'];
	$ukuran_file = $_FILES['Gambar']['size'];
	$error = $_FILES['Gambar']['error'];
	$tmp_file = $_FILES['Gambar']['tmp_name'];

	// ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		// echo "<script>
		//		alert('pilih gambar terlebih dahulu!');
		//		</script>";
		return 'nopoto.jpg';
	}

	// cek ekstensi file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
				alert('yang anda pilih bukan gambar!');
				</script>";
		return false;
	}

	// cek type file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
		echo "<script>
				alert('yang anda pilih bukan gambar!');
				</script>";
		return false;
	}

	// cek ukuran file
	// maksimal 5Mb == 5000000
	if ($ukuran_file > 5000000) {
		echo "<script>
				alert('ukuran terlalu besar!');
				</script>";
		return false;
	}

	// lolos pengecekan
	// siap upload file
	// generate nama file baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

	return $nama_file_baru;
}

function tambah($data)
{
	$conn = koneksi();

	// $Gambar = htmlspecialchars($data['Gambar']);
	$Nama = htmlspecialchars($data['Nama']);
	$NRP = htmlspecialchars($data['NRP']);
	$Email = htmlspecialchars($data['Email']);
	$Jurusan = htmlspecialchars($data['Jurusan']);

	// upload gambar
	$Gambar = upload();
	if (!$Gambar) {
		return false;
	}

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

	// menghapus gambar di folder img
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
	if ($mhs['Gambar'] != 'nopoto.jpg') {
		unlink('img/' . $mhs['Gambar']);
	}
	
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_query($conn));
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();

	$id = ($data['id']);
	$Gambar_lama = htmlspecialchars($data['Gambar_lama']);
	$Nama = htmlspecialchars($data['Nama']);
	$NRP = htmlspecialchars($data['NRP']);
	$Email = htmlspecialchars($data['Email']);
	$Jurusan = htmlspecialchars($data['Jurusan']);

	$Gambar = upload();
	if (!$Gambar) {
		return false;
	}

	if ($Gambar == 'nopoto.jpg') {
		$Gambar = $Gambar_lama;
	}

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