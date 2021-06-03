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
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");


    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();

    // echo date("l, d-M-Y", time()-60*60*24*100);
    

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // urutan = jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l", mktime(0,0,0,3,25,2002));

    
    // strtotime
    // echo date ("l", strtotime("25 Mar 2002"));
?>