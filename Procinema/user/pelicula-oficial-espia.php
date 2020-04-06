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
	<link rel="stylesheet" href="../rscUser/css/style.css">

	<!-- Favicons -->
	<link rel="icon" type="../rscUser/image/png" href="../rscUser/icon/logoC.png" sizes="32x32">
	<link rel="apple-touch-icon" href="../rscUser/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../rscUser/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../rscUser/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../rscUser/icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Procinema - El oficial y el espía</title>

	<style>
		.noc:hover {
			color: antiquewhite;
		}
	</style>

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
								<!-- dropdown -->
								<li class="header__nav-item">
									<a href="index.php" class="header__nav-link">Inicio</a>
								</li>
								<!-- end dropdown -->
							</ul>

							<!-- header auth -->
							<div class="header__auth">
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

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="../rscUser/img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
				<?php $pelicula5 = $PeliculaDAO->consultarPelicula(5); ?>
					<h1 class="details__title"><?php echo $pelicula5->getNom_pelicula() ?></h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-xl-5">
								<div class="card__cover">
									<img src="../rscUser/img/covers/el-oficial-espia.jpg" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
									<?php $cal = (string)$pelicula5->getCalificacion() ?>
										<span class="card__rate"><i class="icon ion-ios-star"></i> <?php echo $cal ?></span>

										<ul class="card__list">
											<li>12+</li>
										</ul>
									</div>

									<ul class="card__meta">
										<?php
										$genero = $T_GeneroDAO->consultarGenero(5)->getNom_genero();
										$fecha = (string)$pelicula5->getFecha();
										$duracion = (string)$pelicula5->getDuracion();					
										?>
										<li><span>Genero:</span> <a href="#"><?php echo $genero ?></a>
                                            <!-- <a href="#">Histórico</a>
                                            <a href="#">Suspense</a>
											<a href="#">Thriller</a> -->
										</li>
										<li><span>Año de lanzamiento:</span> <?php echo $fecha ?></li>
										<li><span>Duración:</span> <?php echo $duracion ?> min</li>
										<li><span>País:</span> <a href="#">FRANCIA</a> </li>
									</ul>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
					<div class="inputForm">

						<div class="card__description">

							<div class="accordion" id="accordion">
								<div class="accordion__card">
									<div class="card-header" id="headingOne">
										<button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											<span>Múltiplex: Titán</span>
											<?php											
											$idioma = $Idioma->consultarIdioma(1)->getNom_Idioma();																
											?>
											<span>2D - Hablada en <?php echo $idioma ?></span>
										</button>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body">
											<table class="accordion__list">
												<thead>
													<tr>
														<th style="width: 20px;">#</th>
														<th>Horario</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th>1</th>
														<td>
															<buuton class="noc">11:30 am</buuton>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>
															<buuton class="noc">2:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>
															<buuton class="noc">5:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>
															<buuton class="noc">7:20 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>
															<buuton class="noc">9:50 pm</buuton>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="accordion__card">
									<div class="card-header" id="headingTwo">
										<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<span>Múltiplex: Unicentro</span>
											<span>2D - Hablada en <?php echo $idioma ?></span>
										</button>
									</div>

									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body">
											<table class="accordion__list">
												<thead>
													<tr>
														<th style="width: 20px;">#</th>
														<th>Horario</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th>1</th>
														<td>
															<buuton class="noc">11:30 am</buuton>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>
															<buuton class="noc">2:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>
															<buuton class="noc">5:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>
															<buuton class="noc">7:20 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>
															<buuton class="noc">9:50 pm</buuton>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="accordion__card">
									<div class="card-header" id="headingThree">
										<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<span>Múltiplex: UnicentroPlaza Central</span>
											<span>2D - Hablada en <?php echo $idioma ?></span>
										</button>
									</div>

									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="card-body">
											<table class="accordion__list">
												<thead>
													<tr>
														<th style="width: 20px;">#</th>
														<th>Horario</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th>1</th>
														<td>
															<buuton class="noc">11:30 am</buuton>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>
															<buuton class="noc">2:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>
															<buuton class="noc">5:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>
															<buuton class="noc">7:20 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>
															<buuton class="noc">9:50 pm</buuton>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="accordion__card">
									<div class="card-header" id="headingFour">
										<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<span>Múltiplex: Gran Estación</span>
											<span>2D - Hablada en <?php echo $idioma ?></span>
										</button>
									</div>

									<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
										<div class="card-body">
											<table class="accordion__list">
												<thead>
													<tr>
														<th style="width: 20px;">#</th>
														<th>Horario</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th>1</th>
														<td>
															<buuton class="noc">11:30 am</buuton>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>
															<buuton class="noc">2:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>
															<buuton class="noc">5:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>
															<buuton class="noc">7:20 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>
															<buuton class="noc">9:50 pm</buuton>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="accordion__card">
									<div class="card-header" id="headingFive">
										<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<span>Múltiplex: Embajador (centro)</span>
											<span>2D - Hablada en <?php echo $idioma ?></span>
										</button>
									</div>

									<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
										<div class="card-body">
											<table class="accordion__list">
												<thead>
													<tr>
														<th style="width: 20px;">#</th>
														<th>Horario</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>
															<buuton class="noc">11:30 am</buuton>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>
															<buuton class="noc">2:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>
															<buuton class="noc">5:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>
															<buuton class="noc">7:20 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>
															<buuton class="noc">9:50 pm</buuton>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="accordion__card">
									<div class="card-header" id="headingSix">
										<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											<span>Múltiplex: Las Américas</span>
											<span>2D - Hablada en <?php echo $idioma ?></span>
										</button>
									</div>

									<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
										<div class="card-body">
											<table class="accordion__list">
												<thead>
													<tr>
														<th style="width: 20px;">#</th>
														<th>Horario</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th>1</th>
														<td>
															<buuton class="noc">11:30 am</buuton>
														</td>
													</tr>
													<tr>
														<th>2</th>
														<td>
															<buuton class="noc">2:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>3</th>
														<td>
															<buuton class="noc">5:10 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>4</th>
														<td>
															<buuton class="noc">7:20 pm</buuton>
														</td>
													</tr>
													<tr>
														<th>5</th>
														<td>
															<buuton class="noc">9:50 pm</buuton>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
				<!-- end player -->
			</div>
		</div>
		<!-- end details content -->
	</section>

	<div class="container">
		<div class="row">

			<!-- input fields -->
			<div class="col-12 col-xl-7"><br><br><br><br><br><br>
				<div class="inputForm">
					<div class="col-12 col-xl-10">
						<div class="caja" id="accordion">
							<div class="accordion__card">
								<div class="card-header" id="headingOne">
									<h1 class="holaaa" style="padding: 5px;">Por favor ingrese los siguientes
										datos
										para la compra:</h1>
									<div class="mr_agilemain">
										<div class="agileits-left" style="padding: 5px;">
											<label class="prueba"> Cédula</label><span style="color: #A3A3A3">*</span>
											<input type="number" id="Username" required style="padding: 5px;">
										</div>
										<div class="agileits-right" style="padding: 5px;">
											<label class="prueba"> Número de asientos</label><span style="color: #A3A3A3">*</span>
											<input type="number" id="Numseats" min="1" max="110" required>
										</div>
									</div>
									<div class="mr_agilemain">
										<div class="agileits-left" style="padding: 5px;">
											<label class="prueba"> Localidad</label><span style="color: #A3A3A3">*</span><br>
											<input type="radio" id="general" name="gender" value="0" checked>
											<label for="general" style="font-style: italic;">Compra
												general</label><br>
											<input type="radio" id="preferencial" name="gender" value="1">
											<label for="preferencial">Compra preferencial</label>
										</div>
										<div class="agileits-right" style="padding: 5px;">
											<label class="prueba"> Servicio por boleta</label><br>
											<label style="color: #A3A3A3">$11.000</label><br>
											<label style="color: #A3A3A3">$15.000</label>
										</div>
									</div>
								</div><br>
								<center>
									<button onclick="takeData()" class="boton">Aceptar</button></center><br>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-5">
				<!-- //input fields -->
				<!-- seat availabilty list -->
				<ul class="seat_w3ls">
					<li class="smallBox greenBox">Asientos seleccionados</li>

					<li class="smallBox redBox">Asientos reservados</li>
					<center>
						<li class="smallBox emptyBox">Asientos disponibles</li>
					</center>
				</ul>
				<!-- seat availabilty list -->
				<!-- seat layout -->
				<div class="seatStructure txt-center" style="overflow-x:auto;">
					<table id="seatsBlock">
						<p id="notification"></p>
						<tr>
							<td></td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td></td>
							<td>6</td>
							<td>7</td>
							<td>8</td>
							<td>9</td>
							<td>10</td>
							<td>11</td>
							<td>12</td>
						</tr>
						<tr>
							<td>A</td>
							<td>
								<input type="checkbox" class="seats" value="A1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A5">
							</td>
							<td class="seatGap"></td>
							<td>
								<input type="checkbox" class="seats" value="A6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="A12">
							</td>
						</tr>

						<tr>
							<td>B</td>
							<td>
								<input type="checkbox" class="seats" value="B1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="B6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="B12">
							</td>
						</tr>

						<tr>
							<td>C</td>
							<td>
								<input type="checkbox" class="seats" value="C1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="C6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="C12">
							</td>
						</tr>

						<tr>
							<td>D</td>
							<td>
								<input type="checkbox" class="seats" value="D1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="D6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="D12">
							</td>
						</tr>

						<tr>
							<td>E</td>
							<td>
								<input type="checkbox" class="seats" value="E1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="E6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="E12">
							</td>
						</tr>

						<tr class="seatVGap"></tr>

						<tr>
							<td>F</td>
							<td>
								<input type="checkbox" class="seats" value="F1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="F6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="F12">
							</td>
						</tr>

						<tr>
							<td>G</td>
							<td>
								<input type="checkbox" class="seats" value="G1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="G6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="G12">
							</td>
						</tr>

						<tr>
							<td>H</td>
							<td>
								<input type="checkbox" class="seats" value="H1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="H6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="H12">
							</td>
						</tr>

						<tr>
							<td>I</td>
							<td>
								<input type="checkbox" class="seats" value="I1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="I6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="I12">
							</td>
						</tr>

						<tr>
							<td>J</td>
							<td>
								<input type="checkbox" class="seats" value="J1">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J2">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J3">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J4">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J5">
							</td>
							<td></td>
							<td>
								<input type="checkbox" class="seats" value="J6">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J7">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J8">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J9">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J10">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J11">
							</td>
							<td>
								<input type="checkbox" class="seats" value="J12">
							</td>
						</tr>
					</table>

					<div class="screen">
						<h2 class="wthree">Pantalla</h2>
					</div>
					<center><br>
						<button onclick="updateTextArea()" class="boton2">Confirmar</button></center>
				</div>
				<!-- //seat layout -->
				<!-- details after booking displayed here -->
				<div class="displayerBoxes txt-center" style="overflow-x:auto;">
					<table class="Displaytable w3ls-table">
						<tr>
							<th>Cantidad de asientos</th>
							<th>Posición</th>
						</tr>
						<tr>
							<td>
								<textarea id="NumberDisplay"></textarea>
							</td>
							<td>
								<textarea id="seatsDisplay"></textarea>
							</td>
						</tr>
					</table>
				</div><br>
				<!-- //details after booking displayed here -->
			</div>

		</div>
	</div>

	<!-- end details -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="../rscUser/js/jquery-3.3.1.min.js"></script>
	<script>
		function onLoaderFunc() {
			$(".seatStructure *").prop("disabled", true);
			$(".displayerBoxes *").prop("disabled", true);
		}

		function takeData() {
			if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0) || ($("#Numseats").val() == 0)) {
				alert("Por favor ingrese la cédula y la cantidad de asientos");
			} else {
				if ($("#Numseats").val() > 110) {
					alert("El maximo de asientos es 110");
				} else {
					$(".inputForm *").prop("disabled", true);
					$(".seatStructure *").prop("disabled", false);
					document.getElementById("notification").innerHTML =
						"<b style='margin-bottom:0px;background:rgb(248, 210, 194);letter-spacing:1px;'>Por favor selecciona los asientos!</b>";
				}
			}
		}


		function updateTextArea() {

			if (($("input:checked").length)-1 == ($("#Numseats").val())) {
				$(".seatStructure *").prop("disabled", true);

				var allNameVals = [];
				var allNumberVals = [];
				var allSeatsVals = [];

				//Storing in Array
				allNameVals.push($("#Username").val());
				allNumberVals.push($("#Numseats").val());
				$('#seatsBlock :checked').each(function() {
					allSeatsVals.push($(this).val());
				});

				//Displaying 
				$('#nameDisplay').val(allNameVals);
				$('#NumberDisplay').val(allNumberVals);
				$('#seatsDisplay').val(allSeatsVals);
			} else {
				alert("Please select " + ($("#Numseats").val()) + " seats")
			}
		}


		function myFunction() {
			alert($("input:checked").length);
		}

		/*
		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
		*/


		$(":checkbox").click(function() {
			if (($("input:checked").length)-1 == ($("#Numseats").val())) {
				$(":checkbox").prop('disabled', true);
				$(':checked').prop('disabled', false);
			} else {
				$(":checkbox").prop('disabled', false);
			}
		});
	</script>
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