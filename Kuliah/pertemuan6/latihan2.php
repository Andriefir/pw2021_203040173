<?php
/* 
    Andrie Firmansyah
    203040173
    https://github.com/Andriefir/pw2021_203040173
    Pertemuan 6 - 24 Februari 2021 
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>
<?php
// $mahasiswa = [
//     ["Mochammad Andrie Firmansyah", "203040173", "Teknik Informatika", "andriefirmansyah334@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Mochammad Andrie Firmansyah", 
        "nrp" => "203040173",
        "email" => "andriefirmansyah334@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Andrie.png"
    ]
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
    <li>
        <img src="img/Andrie.png">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>