<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Pertemuan 13
  https://github.com/Andriefir/pw2021_203040173
*/
?>
<?php 
require 'functions.php';

if (isset($_POST['registrasi'])) {
	if(registrasi($_POST) > 0) {
		echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
	} else {
		echo 'user gagal ditambahkan!';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<h3>From Registrasi</h3>

	<form action="" method="POST">
		<ul>
			<li>
				<label>
					Username : 
					<input type="text" name="username" autofocus autocomplete="off" required>
				</label>
			</li>
			<li>
				<label>
					Password :
					<input type="password" name="password1" required>
				</label>
			</li>
			<li>
				<label>
					Konfirmasi Password : 
					<input type="password" name="password2" required>
				</label>
			</li>
			<li>
				<button type="submit" name="registrasi">Registrasi</button>
			</li>
		</ul>
	</form>
</body>
</html>