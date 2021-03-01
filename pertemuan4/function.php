<?php
/*
Andrie Firmansyah
203040173
https://github.com/Andriefir/pw2021_203040173
Pertemuan 4 - 26 Februari 2021
Mempelajari tentang Date dan Function dalam PHP
*/
?>


<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi"); ?></h1>
</body>
</html>