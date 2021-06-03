<?php
/* 
Andrie Firmansyah
203040173
https://github.com/Andriefir/pw2021_203040173
Pertemuan 5 - 23 Februari 2021 )
Materi Minggu ini mempelajari mengenai Array
*/
?>
<?php
$mahasiswa = [
    ["Mochammad Andrie Firmansyah", "203040173", "TIF", "andriefirmansyah334@gmail.com"],
    ["Andriefir", "203040174", "TI", "enin04292002@gmail.com"],
    ["Andrie", "203040175", "TM", "andrie2345@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>