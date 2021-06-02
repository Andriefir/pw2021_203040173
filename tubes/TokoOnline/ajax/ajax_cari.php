<?php 
/* 
  Mochammad Andrie Firmansyah
  203040173
  Jumat 13.00
  Tugas Besar
  https://github.com/Andriefir/pw2021_203040173
*/
?>

<?php 
require '../functions.php';
$phones = cari($_GET['keyword']);
?>

<div class="row">
	<div class="card">
		<?php if(empty($phones)) : ?>
			<p style="color: red; font-style: italic;">data product tidak ditemukan!</p>
		<?php endif; ?>	

		<?php $i = 1; 
		foreach($phones as $phone) : ?>
		<img src="img/<?= $phone['Picture']; ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?= $phone['Name']; ?></h5>
				<a href="detail.php?id=<?= $phone['id']; ?>" class="btn btn-primary">Detail</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>