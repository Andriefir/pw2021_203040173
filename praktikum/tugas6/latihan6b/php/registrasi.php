<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Registrasi Berhasil');
        document.location.href = 'login.php';
    </script>";
    }else {
        echo "<script>
        alert('Registrasi Gagal');
    </script>";
    }

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Latihan 6B</title>
</head>
<body>
	<h1>Halaman Registrasi</h1>
	
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="username">username</label></td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><label for="password">password</label></td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<button type="submit" name="register">REGISTER</button>
	</form>
</body>
</html>