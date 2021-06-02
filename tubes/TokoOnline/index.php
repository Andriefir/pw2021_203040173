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
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$phones = query("SELECT * FROM phones");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
	$phones = cari($_POST['keyword']);
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

    <title>Halaman index</title>
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
	      <form action="" method="POST">
	        <input class="keyword" type="Search" size="30" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" autofocus>
	        <button class="tombol-cari" name="cari" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<div class="row mt-5 no-gutters">
		<div class="col-md-2 bg-light">
			<ul class="list-group p-1 pt-4">
			  <li class="list-group-item" style="background-color: #FF8C00"><i class="fas fa-list"></i> KATEGORI PRODUK</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Samsung</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Xiaomi</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Poco</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Iphone</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Vivo</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Oppo</li>
			  <li class="list-group-item"><i class="fas fa-angle-right"></i> Realme</li>
			</ul>
		</div>
		<div class="col-md-10">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/slide1.jpg" class="d-block w-100" alt="..." height="600">
			    </div>
			    <div class="carousel-item">
			      <img src="img/slide2.jpg" class="d-block w-100" alt="..." height="600">
			    </div>
			    <div class="carousel-item">
			      <img src="img/slide4.jpg" class="d-block w-100" alt="..." height="600">
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>

			<div class="container">
				<h4 class="text-center font-weight-bold m-4">PRODUCT</h4>
				<div id="container">
					<div class="row">
						<div class="card mx-auto" style="width: 18rem;">
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
				</div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
     <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>