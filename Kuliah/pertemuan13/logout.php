<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Jumat 13.00
  Pertemuan 13
  https://github.com/Andriefir/pw2021_203040173
*/
?>

<?php 
session_start();
session_destroy();
header("Location: login.php");
exit;
?>