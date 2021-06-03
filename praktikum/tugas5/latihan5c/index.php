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
    <title>Latihan 5C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
 <div class="container">
  <?php foreach ($phones as $phone) : ?>
    <p class="Name">
      <a href="php/detail.php?id=<?= $phone['id'] ?>">
        <?= $phone["Name"] ?>
      </a>
    </p>
  <?php endforeach; ?>
 </div>
</body>
</html> 