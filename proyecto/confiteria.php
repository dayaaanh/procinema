<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Procinema – Confiteria</title>

</head>
<body class="body">

	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.html" class="header__logo">
								<img src="img/logo.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
										<a href="index.php" class="header__nav-link">Inicio</a>
									</li>

									<li class="header__nav-item">
																<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Confiteria</a>

											<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
												<li><a href="confiteria.php">Lista de Productos</a></li>
												<li><a href="confiteriaCombos.php">Combos</a></li>
											</ul>
									</li>

								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="signin.html" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Cerrar Sesión</span>
								</a>
							</div>
							<!-- end header auth -->


						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">

						<div class="header__search-content">
							<input type="text" placeholder="Buscar producto en Confiteria">

							<button type="button">Buscar</button>
						</div>
					</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Lista de Produtos</h2>
						<!-- end section title -->




						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.php">Inicio</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Confiteria</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">

							<!-- filter item -->
							<div class="filter__item" id="filter__quality">
								<span class="filter__item-label">NOMBRE	:</span>
									<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<input type="button" value="Pop Corn">
												<span></span>
									</div>
								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
									<li>Pop Corn</li>
									<li>Hot Dogs</li>
									<li>Sándiwches</li>
									<li>Nachos</li>
									<li>Bebidas</li>
									<li>Otros</li>
								</ul>
							</div>
						</div>

						<!-- filter btn -->
						<button class="filter__btn" type="button">Aplicar Filtro</button>
						<!-- end filter btn -->


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->

	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
							<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/productos/PopCorn.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-cart"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Palomitas de Maíz</a></h3>
							<span class="card__category">
								<a href="#">Pop Corn</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-cart"></i>$ 4.000</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/productos/Sandwich.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-cart"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Sándiwches</a></h3>
							<span class="card__category">
								<a href="#">Sandwich</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-cart"></i>$4.000</span>
						</div>
					</div>
				</div>
				<!-- end card -->


				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/productos/HotDog.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-cart"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Perros Calientes</a></h3>
							<span class="card__category">
								<a href="#">Hot Dog</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-cart"></i>$8.000</span>
						</div>
					</div>
				</div>
				<!-- end card -->


				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/productos/nachos.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-cart"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Nachos</a></h3>
							<span class="card__category">
								<a href="#">Nachos</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-cart"></i>$7.000</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/productos/cover5.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-cart"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-cart"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->

				<!-- card -->
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/productos/bebida1CC.jpg" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-cart"></i>
							</a>
						</div>


						<div class="card__content">
							<h3 class="card__title"><a href="#"><!-- <?php #NOMBRE ?>--></a></h3>
							<span class="card__rate"><i class="icon ion-ios-cart"></i><!-- <?php #PRECIO ?>--></span>
						</div>
					</div>
				</div>
				<!-- end card -->



				<!-- paginator -->
				<div class="col-12">
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
						</li>
						<li class="paginator__item"><a href="#">1</a></li>
						<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
						<li class="paginator__item"><a href="#">3</a></li>
						<li class="paginator__item"><a href="#">4</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
						</li>
					</ul>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->





	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
