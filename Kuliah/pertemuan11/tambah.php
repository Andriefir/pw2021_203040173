<?php 
/* 
    Mochammad Andrie Firmansyah
    203040173
    Pertemuan 11
    https://github.com/Andriefir/pw2021_203040173
*/
?>
<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                  Gambar :
                  <input type="text" name="Gambar" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Nama :
                  <input type="text" name="Nama" autofocus required>
                </label><br><br>
            </li>
            <li>
                <label>
                  NRP :
                  <input type="text" name="NRP" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Email :
                  <input type="text" name="Email" required>
                </label><br><br>
            </li>
            <li>
                <label>
                  Jurusan :
                  <input type="text" name="Jurusan" required>
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>