<?php
/* 
    Andrie Firmansyah
    203040173
    https://github.com/Andriefir/pw2021_203040173
    Pertemuan 7 - 26 Februari 2021 
    Materi Minggu ini mempelajari mengenai GET & POST
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"] ?>!</h1>
<?php endif; ?>

    <form action="" method="post">
    <!-- action="latihan4.php"  -->
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>