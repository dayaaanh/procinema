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
	<title>Procinema</title>

	<style>
		.link { color: #A3A3A3; } /* CSS link color */
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
								<img src="img/logo.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header auth -->
							<div class="header__auth">
								<a href="signin.php" class="header__sign-in">
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
		<div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title">I Dream in Another Language</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-10">
					<div class="card card--details card--series">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
								<div class="card__cover">
									<img src="img/covers/cover.jpg" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

										<ul class="card__list">
											<li>16+</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genero:</span> <a href="#">Action</a>
											<a href="#">Triler</a></li>
										<li><span>Año de lanzamiento:</span> 2017</li>
										<li><span>Duración:</span> 120 min</li>
										<li><span>País:</span> <a href="#">USA</a> </li>
									</ul>

									<div class="card__description card__description--details">
										It is a long established fact that a reader will be distracted by the readable
										content of a page when looking at its layout. The point of using Lorem Ipsum is
										that it has a more-or-less normal distribution of letters, as opposed to using
										'Content here, content here', making it look like readable English. Many desktop
										publishing packages and web page editors now use Lorem Ipsum as their default
										model text, and a search for 'lorem ipsum' will uncover many web sites still in
										their infancy. Various versions have evolved over the years, sometimes by
										accident, sometimes on purpose (injected humour and the like).
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
					<video controls crossorigin playsinline
						poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
							type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
							type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
							type="video/mp4" size="1080">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4"
							type="video/mp4" size="1440">

						<!-- Fallback for browsers that don't support the <video> element -->
						<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
							download>Download</a>
					</video>
				</div>
				<!-- end player -->

				<!-- accordion -->
				<div class="col-12 col-xl-6">
					<div class="accordion" id="accordion">
						<div class="accordion__card">
							<div class="card-header" id="headingOne">
								<button type="button" data-toggle="collapse" data-target="#collapseOne"
									aria-expanded="true" aria-controls="collapseOne">
									<span>Múltiplex: Titán</span>
									<span>2D - Hablada en Español</span>
								</button>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Horario</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td><a href="procesoCompra.php" class="link">11:30 am</a></td>
											</tr>
											<tr>
												<th>2</th>
												<td><a href="#" class="link">2:10 pm</a></td>
											</tr>
											<tr>
												<th>3</th>
												<td><a href="#" class="link">5: 10 pm</a></td>
											</tr>
											<tr>
												<th>4</th>
												<td><a href="#" class="link">7:20 pm</a></td>
											</tr>
											<tr>
												<th>5</th>
												<td><a href="#" class="link">9:50 pm</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingTwo">
								<button class="collapsed" type="button" data-toggle="collapse"
									data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span>Múltiplex: Unicentro</span>
									<span>2D - Hablada en Español</span>
								</button>
							</div>

							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Horario</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td><a href="#" class="link">11:30 am</a></td>
											</tr>
											<tr>
												<th>2</th>
												<td><a href="#" class="link">2:10 pm</a></td>
											</tr>
											<tr>
												<th>3</th>
												<td><a href="#" class="link">5: 10 pm</a></td>
											</tr>
											<tr>
												<th>4</th>
												<td><a href="#" class="link">7:20 pm</a></td>
											</tr>
											<tr>
												<th>5</th>
												<td><a href="#" class="link">9:50 pm</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingThree">
								<button class="collapsed" type="button" data-toggle="collapse"
									data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span>Múltiplex: UnicentroPlaza Central</span>
									<span>2D - Hablada en Español</span>
								</button>
							</div>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Horario</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td><a href="#" class="link">11:30 am</a></td>
											</tr>
											<tr>
												<th>2</th>
												<td><a href="#" class="link">2:10 pm</a></td>
											</tr>
											<tr>
												<th>3</th>
												<td><a href="#" class="link">5: 10 pm</a></td>
											</tr>
											<tr>
												<th>4</th>
												<td><a href="#" class="link">7:20 pm</a></td>
											</tr>
											<tr>
												<th>5</th>
												<td><a href="#" class="link">9:50 pm</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingFour">
								<button class="collapsed" type="button" data-toggle="collapse"
									data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<span>Múltiplex: Gran Estación</span>
									<span>2D - Hablada en Español</span>
								</button>
							</div>

							<div id="collapseFour" class="collapse" aria-labelledby="headingFour"
								data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Horario</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td><a href="#" class="link">11:30 am</a></td>
											</tr>
											<tr>
												<th>2</th>
												<td><a href="#" class="link">2:10 pm</a></td>
											</tr>
											<tr>
												<th>3</th>
												<td><a href="#" class="link">5: 10 pm</a></td>
											</tr>
											<tr>
												<th>4</th>
												<td><a href="#" class="link">7:20 pm</a></td>
											</tr>
											<tr>
												<th>5</th>
												<td><a href="#" class="link">9:50 pm</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingThree">
								<button class="collapsed" type="button" data-toggle="collapse"
									data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span>Múltiplex: Embajador (centro)</span>
									<span>2D - Hablada en Español</span>
								</button>
							</div>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Horario</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>1</th>
												<td><a href="#" class="link">11:30 am</a></td>
											</tr>
											<tr>
												<th>2</th>
												<td><a href="#" class="link">2:10 pm</a></td>
											</tr>
											<tr>
												<th>3</th>
												<td><a href="#" class="link">5: 10 pm</a></td>
											</tr>
											<tr>
												<th>4</th>
												<td><a href="#" class="link">7:20 pm</a></td>
											</tr>
											<tr>
												<th>5</th>
												<td><a href="#" class="link">9:50 pm</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingThree">
								<button class="collapsed" type="button" data-toggle="collapse"
									data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span>Múltiplex: Las Américas</span>
									<span>2D - Hablada en Español</span>
								</button>
							</div>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Horario</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td><a href="#" class="link">11:30 am</a></td>
											</tr>
											<tr>
												<th>2</th>
												<td><a href="#" class="link">2:10 pm</a></td>
											</tr>
											<tr>
												<th>3</th>
												<td><a href="#" class="link">5: 10 pm</a></td>
											</tr>
											<tr>
												<th>4</th>
												<td><a href="#" class="link">7:20 pm</a></td>
											</tr>
											<tr>
												<th>5</th>
												<td><a href="#" class="link">9:50 pm</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end accordion -->
			</div>
			<!-- end details content -->
		</div>
	</section>
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