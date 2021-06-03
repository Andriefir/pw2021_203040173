<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>
<?php 
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");
// Memilih database
mysqli_select_db($conn, "pw_tubes_203040173");
// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM phones");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <th><?= $i ?></th>
      <td><img src="../assets/img/<?= $row["Picture"]; ?>"></td>
      <td><?= $row["Name"] ?></td>
      <td><?= $row["Brand"] ?></td>
      <td><?= $row["Deskripsi"] ?></td>
      <td><?= $row["Category"] ?></td>
      <td><?= $row["Price"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
</body>
</html>