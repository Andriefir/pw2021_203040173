<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>

<?php  
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>