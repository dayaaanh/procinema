<?php
require_once('../daos/T_GeneroDAO.php');
require_once('../daos/PeliculaDAO.php');
require_once('../daos/IdiomaDAO.php');
require_once('../util/Conexion.php');
$conexion = new Conexion();
$con = $conexion->conectarBD();

$PeliculaDAO = new PeliculaDAO($con);
$T_GeneroDAO = new T_GeneroDAO($con);
$Idioma = new IdiomaDAO($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="../rscUser/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../rscUser/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../rscUser/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../rscUser/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="../rscUser/css/nouislider.min.css">
	<link rel="stylesheet" href="../rscUser/css/ionicons.min.css">
	<link rel="stylesheet" href="../rscUser/css/plyr.css">
	<link rel="stylesheet" href="../rscUser/css/photoswipe.css">
	<link rel="stylesheet" href="../rscUser/css/default-skin.css">
	<link rel="stylesheet" href="../rscUser/css/main.css"> 

	<!-- Favicons -->
	<link rel="icon" type="../rscUser/image/png" href="../rscUser/icon/logoC.png" sizes="32x32">
	<link rel="apple-touch-icon" href="../rscUser/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../rscUser/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../rscUser/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../rscUser/icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Procinema</title>

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
							<a href="index.php" class="header__logo">
								<img src="../rscUser/img/logo.png" alt="">
							</a>
							<!-- end header logo -->

							<ul class="header__nav">													
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Confiteria</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="confiteria.php">Lista de Productos</a></li>
										<li><a href="confiteriaCombos.php">Combos</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="../signin.php" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Cerrar sesión</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="../rscUser/img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="../rscUser/img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="../rscUser/img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="../rscUser/img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>Nuevas películas</b></h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="../rscUser/img/covers/sonic.jpg" alt="">
									<a href="pelicula-sonic.php" class="card__play">

										<i class="icon ion-ios-redo"></i>
									</a>
								</div>
								<div class="card__content">
									<?php $pelicula = $PeliculaDAO->consultarPelicula(2); 									
									$genero = $T_GeneroDAO->consultarGenero(7)->getNom_genero();
									$fecha = (string)$pelicula->getFecha();
									$duracion = (string)$pelicula->getDuracion();
									$idioma = $Idioma->consultarIdioma(1)->getNom_Idioma();
									?>
									<h3 class="card__title"><a href="pelicula-sonic.php"><?php echo $pelicula->getNom_pelicula() ?></a></h3>
									<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
									<span class="card__category">
										<a href="#"><?php echo $genero ?></a>
										<!-- <a href="#">Infantil / Familiar</a> -->
									</span>									
									<?php $cal = (string)$pelicula->getCalificacion() ?>
									<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="../rscUser/img/covers/jojo-rabbit.jpg" alt="">
									<a href="pelicula-jojo.php" class="card__play">
										<i class="icon ion-ios-redo"></i>
									</a>
								</div>
								<div class="card__content">
								<?php $pelicula2 = $PeliculaDAO->consultarPelicula(1); 
									$genero2 = $T_GeneroDAO->consultarGenero(1)->getNom_genero();
									$fecha2 = (string)$pelicula2->getFecha();
									$duracion2 = (string)$pelicula2->getDuracion();
									$cal2 = (string)$pelicula2->getCalificacion();									
									?>
									<h3 class="card__title"><a href="pelicula-jojo.php"><?php echo $pelicula2->getNom_pelicula() ?></a></h3>
									<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
									<span class="card__category">
										<a href="#"><?php echo $genero2 ?></a>
										<!-- <a href="#">Drama</a>
										<a href="#">Bélica</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal2 ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="../rscUser/img/covers/1917.jpg" alt="">
									<a href="pelicula-1917.php" class="card__play">
										<i class="icon ion-ios-redo"></i>
									</a>
								</div>
								<div class="card__content">
								<?php $pelicula3 = $PeliculaDAO->consultarPelicula(3); 
									$genero3 = $T_GeneroDAO->consultarGenero(3)->getNom_genero();
									$fecha3 = (string)$pelicula3->getFecha();
									$duracion3 = (string)$pelicula3->getDuracion();
									$cal3 = (string)$pelicula3->getCalificacion();									
									?>
									<h3 class="card__title"><a href="pelicula-1917.php"><?php echo $pelicula3->getNom_pelicula() ?></a></h3>
									<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
									<span class="card__category">
										<a href="#"><?php echo $genero3 ?></a>
										<!-- <a href="#">Bélica</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal3 ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="../rscUser/img/covers/El-Hombre-Invisible.jpg" alt="">
									<a href="pelicula-hombre-invisible.php" class="card__play">
										<i class="icon ion-ios-redo"></i>
									</a>
								</div>
								<div class="card__content">
								<?php $pelicula4 = $PeliculaDAO->consultarPelicula(4); 
									$genero4 = $T_GeneroDAO->consultarGenero(8)->getNom_genero();
									$fecha4 = (string)$pelicula4->getFecha();
									$duracion4 = (string)$pelicula4->getDuracion();
									$cal4 = (string)$pelicula4->getCalificacion();
									$idioma2 = $Idioma->consultarIdioma(2)->getNom_Idioma();
									?>
									<h3 class="card__title"><a href="pelicula-hombre-invisible.php"><?php echo $pelicula4->getNom_pelicula() ?></a></h3>
									<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma2 ?></span>
									<span class="card__category">
										<a href="#"><?php echo $genero4 ?></a>
										<!-- <a href="#">Terror</a>
										<a href="#">Suspenso / Thriller</a> -->
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal4 ?></span>
								</div>
							</div>
							<!-- end card -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Todas las películas</h2>
						<!-- end content title -->											
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">

											<img src="../rscUser/img/covers/sonic.jpg" alt="">
											<a href="pelicula-sonic.php" class="card__play">

												<i class="icon ion-ios-redo"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">

											<h3 class="card__title"><a href="pelicula-sonic.php"><?php echo $pelicula->getNom_pelicula() ?></a></h3>
											<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
											<span class="card__category">
												<a href="#"><?php echo $genero ?></a>
												<!-- <a href="#">Infantil / Familiar</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal ?></span>

												<ul class="card__list">
													<li>10+</li>

												</ul>
											</div>

											<div class="card__description">
											<?php
											$des = $pelicula->getDescripcion();
											?>
												<p><?php echo $des ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="../rscUser/img/covers/jojo-rabbit.jpg" alt="">
											<a href="pelicula-jojo.php" class="card__play">
												<i class="icon ion-ios-redo"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="pelicula-jojo.php"><?php echo $pelicula2->getNom_pelicula() ?></a></h3>
											<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
											<span class="card__category">
												<a href="#"><?php echo $genero2 ?></a>
												<!-- <a href="#">Drama</a>
												<a href="#">Bélica</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal2 ?></span>

												<ul class="card__list">
													<li>12+</li>

												</ul>
											</div>

											<div class="card__description">
											<?php
											$des2 = $pelicula2->getDescripcion();
											?>
												<p><?php echo $des2 ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="../rscUser/img/covers/1917.jpg" alt="">
											<a href="pelicula-1917.php" class="card__play">
												<i class="icon ion-ios-redo"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="pelicula-1917.php"><?php echo $pelicula3->getNom_pelicula() ?></a></h3>
											<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
											<span class="card__category">
												<a href="#"><?php echo $genero3 ?></a>
												<!-- <a href="#">Bélica</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal3 ?></span>

												<ul class="card__list">
													<li>12+</li>

												</ul>
											</div>

											<div class="card__description">
											<?php
											$des3 = $pelicula3->getDescripcion();
											?>
												<p><?php echo $des3 ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="../rscUser/img/covers/El-Hombre-Invisible.jpg" alt="">
											<a href="pelicula-hombre-invisible.php" class="card__play">
												<i class="icon ion-ios-redo"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="pelicula-hombre-invisible.php"><?php echo $pelicula4->getNom_pelicula() ?></a></h3>
											<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma2 ?></span>
											<span class="card__category">
												<a href="#"><?php echo $genero4 ?></a>
												<!-- <a href="#">Terror</a>
												<a href="#">Suspenso / Thriller</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal4 ?></span>

												<ul class="card__list">
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
											<?php
											$des4 = $pelicula4->getDescripcion();
											?>
												<p><?php echo $des4 ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="../rscUser/img/covers/el-oficial-espia.jpg" alt="">
											<a href="pelicula-oficial-espia.php" class="card__play">
												<i class="icon ion-ios-redo"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
										<?php $pelicula5 = $PeliculaDAO->consultarPelicula(5); 
										$genero5 = $T_GeneroDAO->consultarGenero(5)->getNom_genero();
										$fecha5 = (string)$pelicula5->getFecha();
										$duracion5 = (string)$pelicula5->getDuracion();
										$cal5 = (string)$pelicula5->getCalificacion();
										$des5 = $pelicula5->getDescripcion();
										?>
											<h3 class="card__title"><a href="pelicula-oficial-espia.php"><?php echo $pelicula5->getNom_pelicula() ?></a></h3>
											<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma ?></span>
											<span class="card__category">
												<a href="#"><?php echo $genero5 ?></a>
												<!-- <a href="#">Histórico</a>
												<a href="#">Suspense</a>
												<a href="#">Thriller</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal5 ?></span>

												<ul class="card__list">
													<li>12+</li>

												</ul>
											</div>

											<div class="card__description">
												<p><?php echo $des5 ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="../rscUser/img/covers/Bloodshot.jpg" alt="">
											<a href="pelicula-bloodshot.php" class="card__play">
												<i class="icon ion-ios-redo"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
										<?php $pelicula6 = $PeliculaDAO->consultarPelicula(6); 
										$genero6 = $T_GeneroDAO->consultarGenero(2)->getNom_genero();
										$fecha6 = (string)$pelicula6->getFecha();
										$duracion6 = (string)$pelicula6->getDuracion();
										$cal6 = (string)$pelicula6->getCalificacion();
										$des6 = $pelicula6->getDescripcion();
										?>
											<h3 class="card__title"><a href="pelicula-bloodshot.php"><?php echo $pelicula6->getNom_pelicula() ?></a></h3>
											<span class="card__category" style="color: white; font-size: 14px">Idioma: <?php echo $idioma2 ?></span>
											<span class="card__category">
												<a href="#"><?php echo $genero6 ?></a>
												<!-- <a href="#">Acción y Aventuras</a>
												<a href="#">Fantástico</a> -->
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal6 ?></span>

												<ul class="card__list">
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p><?php echo $des6 ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->
	<!-- JS -->
	<script src="../rscUser/js/jquery-3.3.1.min.js"></script>
	<script src="../rscUser/js/bootstrap.bundle.min.js"></script>
	<script src="../rscUser/js/owl.carousel.min.js"></script>
	<script src="../rscUser/js/jquery.mousewheel.min.js"></script>
	<script src="../rscUser/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="../rscUser/js/wNumb.js"></script>
	<script src="../rscUser/js/nouislider.min.js"></script>
	<script src="../rscUser/js/plyr.min.js"></script>
	<script src="../rscUser/js/jquery.morelines.min.js"></script>
	<script src="../rscUser/js/photoswipe.min.js"></script>
	<script src="../rscUser/js/photoswipe-ui-default.min.js"></script>
	<script src="../rscUser/js/main.js"></script>
</body>

</html>