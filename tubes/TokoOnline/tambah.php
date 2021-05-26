<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <title>Tambah</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #FF8C00">
      <div class="container">
        <h3><i class="fas fa-shopping-cart p-2" ></i></h3>
        <a class="navbar-brand" href="#" style="font-weight: bold;">BELANJA YUK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Bantuan
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="tambah.php">Tambah Data</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="padding-top: 100px;">
      <h3 style="text-align: center">Form Tambah Data Product</h3>
      <br><br>
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $phone['id']; ?>">
              
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" name="Name"  class="form-control" autofocus required>
          </div>
        </div>

        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Brand</label>
          <div class="col-sm-10">
            <input type="text" name="Brand" class="form-control" required>
          </div>
        </div>

         <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <input type="text" name="Deskripsi" class="form-control" required>
          </div>
        </div>

         <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Category</label>
          <div class="col-sm-10">
            <input type="text" name="Category" class="form-control" required>
          </div>
        </div>

         <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-10">
            <input type="text" name="Price" class="form-control" required>
          </div>
        </div>

         <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Picture</label>
          <div class="col-sm-10">
            <input type="file" name="Picture" class="Picture" onchange="previewImage()">
            <br><br>
            <img src="img/nopoto.jpg" width="120" style="display: block;" class="img-preview"> 
            <br>
            <button type="submit" name="ubah">Tambah Data!</button> 
          </div>
        </div>
      </form>
      <script>
          // preview image untuk tambah dan ubah
          function previewImage() 
          {
            const picture = document.querySelector('.Picture');
            const imgPreview = document.querySelector('.img-preview');

            const oFReader = new FileReader();
              oFReader.readAsDataURL(picture.files[0]);

              oFReader.onload = function (oFREvent) {
              imgPreview.src = oFREvent.target.result;
            };
          }
      </script>
    </div> 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>