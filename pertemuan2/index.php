<?php
/*
Andrie Firmansyah
203040173
https://github.com/Andriefir/pw2021_203040173
Pertemuan 2 -8 Februari 2021
Mempelajari mengenal sintaks PHP
*/ 
?>
<?php  
// Pertemuan 2- PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Andrie Firmansyah";
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Andrie";
// $nama_belakang = "Firmansyah";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
//$x = 1;
//$x -= 5;
//echo $x;
//$nama = "Andrie";
//$nama .= " ";
//$nama .= "Firmansyah";
//echo $nama;

// Perbandingan
// <, >, <=, >=, ==
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 || $x % 2 == 0);

?>
