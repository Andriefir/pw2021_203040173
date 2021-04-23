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

    $Picture        = htmlspecialchars($data["Picture"]);
    $Name           = htmlspecialchars($data["Name"]);
    $Brand          = htmlspecialchars($data["Brand"]);
    $Deskripsi      = htmlspecialchars($data["Deskripsi"]);
    $Category       = htmlspecialchars($data["Category"]);
    $Price          = htmlspecialchars($data["Price"]);

    $query = "INSERT INTO phones
                VALUES
              ('', '$Picture', '$Name', '$Brand', '$Deskripsi', '$Category', '$Price')";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

//fungsi untuk menghapus data didalam database
function hapus($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM phones WHERE id = $id");
    mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) 
{
    $conn = koneksi();

    $id             = $data['id'];
    $Picture        = htmlspecialchars($data['Picture']);
    $Name           = htmlspecialchars($data['Name']);
    $Brand          = htmlspecialchars($data['Brand']);
    $Deskripsi      = htmlspecialchars($data['Deskripsi']);
    $Category       = htmlspecialchars($data['Category']);
    $Price          = htmlspecialchars($data['Price']);

    $query = "UPDATE phones SET
            Picture   = '$Picture',
            Name      = '$Name',
            Brand     = '$Brand',
            Deskripsi = '$Deskripsi',
            Category  = '$Category',
            Price     = '$Price'
            WHERE id = $id
            ";
    
    mysqli_query($conn , $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('your username is already used');
    </script>";
    return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?> 