<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Pertemuan 12
  https://github.com/Andriefir/pw2021_203040173
*/
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
          <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <li>
                <label>
                  Gambar :
                  <input type="text" name="Gambar" required value="<?= $mhs['Gambar']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Nama :
                  <input type="text" name="Nama" autofocus required value="<?= $mhs['Nama']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  NRP :
                  <input type="text" name="NRP" required value="<?= $mhs['NRP']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Email :
                  <input type="text" name="Email" required value="<?= $mhs['Email']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Jurusan :
                  <input type="text" name="Jurusan" required value="<?= $mhs['Jurusan']; ?>">
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>