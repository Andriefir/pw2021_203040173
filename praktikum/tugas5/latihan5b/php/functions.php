<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>

<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040173");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data di dalam database
function tambah($data)
{
    $conn = koneksi();

    $Picture = htmlspecialchars($data["Picture"]);
    $Name = htmlspecialchars($data["Name"]);
    $Brand = htmlspecialchars($data["Brand"]);
    $Deskripsi = htmlspecialchars($data["Deskripsi"]);
    $Category = htmlspecialchars($data["Category"]);
    $Price = htmlspecialchars($data["Price"]);

    $query = "INSERT INTO phones
                VALUES
              ('', '$Picture', '$Name', '$Brand', '$Deskripsi', '$Category', '$Price')";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
?>