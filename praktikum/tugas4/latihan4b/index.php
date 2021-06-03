<?php
/*
    Mochammad Andrie Firmansyah
    203040173
    Jumat,13.00
*/
?>
<?php 
// Melakukan dengan file php lainnya
require 'php/functions.php';
// Melakukan query
$phones = query("SELECT * FROM phones");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4B</title>
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
    <?php foreach($phones as $phone) : ?>
    <tr>
      <th><?= $i ?></th>
      <td><img src="assets/img/<?= $phone["Picture"]; ?>"></td>
      <td><?= $phone["Name"] ?></td>
      <td><?= $phone["Brand"] ?></td>
      <td><?= $phone["Deskripsi"] ?></td>
      <td><?= $phone["Category"] ?></td>
      <td><?= $phone["Price"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</div>
</table>
</body>
</html>