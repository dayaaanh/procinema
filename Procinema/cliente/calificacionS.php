<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="rscUser/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="rscUser/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="rscUser/css/owl.carousel.min.css">
	<link rel="stylesheet" href="rscUser/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="rscUser/css/nouislider.min.css">
	<link rel="stylesheet" href="rscUser/css/ionicons.min.css">
	<link rel="stylesheet" href="rscUser/css/plyr.css">
	<link rel="stylesheet" href="rscUser/css/photoswipe.css">
	<link rel="stylesheet" href="rscUser/css/default-skin.css">
	<link rel="stylesheet" href="rscUser/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="rscUser/image/png" href="rscUser/icon/logoC.png" sizes="32x32">
	<link rel="apple-touch-icon" href="rscUser/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="rscUser/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="rscUser/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="rscUser/icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Procinema</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="rscUser/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="calificacionS_validar.php" class="sign__form" method="post">
							<a href="index.html" class="sign__logo">
								<img src="rscUser/img/logo.png" alt="">
							</a>

							<div class="sign__group">
								
       							<?php 

            	              $server = "35.239.173.88";
       		                   $user = "usuario";
                	          $pass = "root123";
                    	      $bd = "cinejungla";
                        	  $port = "3306";
                      		  $conexion = mysqli_connect($server, $user, $pass,$bd,$port)
                          			or die("Ha sucedido un error inesperado en la conexion de la base de datos");
                          		mysqli_set_charset($conexion,"utf8");
                      		    $result=$conexion->query("SELECT * FROM PELICULA") or die($conexion->error);
                  			   ?>

   						<span  class="sign__text"><a href="#">Califique los servicios de cine jungla </a></span>
							
							</div>

							<div class="sign__group">
								
								<select name="selectB" id="selectA" class="sign__input" required="true">
									<option value="0">Ingrese la calificación de los servicios</option> 
									<option value="1">Puntaje: 1</option>    
								    <option value="2">Puntaje: 2</option>    
								    <option value="3">Puntaje: 3</option>    
								    <option value="4">Puntaje: 4</option>    
								    <option value="5">Puntaje: 5</option>  	
								</select>
							</div>

							<button class="sign__btn" type="submit" >Calificar servicios</button>
							<span class="sign__text"><a href="calificacionP.php">Calificar pelicula</a></span>
						
						
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="rscUser/js/jquery-3.3.1.min.js"></script>
	<script src="rscUser/js/bootstrap.bundle.min.js"></script>
	<script src="rscUser/js/owl.carousel.min.js"></script>
	<script src="rscUser/js/jquery.mousewheel.min.js"></script>
	<script src="rscUser/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="rscUser/js/wNumb.js"></script>
	<script src="rscUser/js/nouislider.min.js"></script>
	<script src="rscUser/js/plyr.min.js"></script>
	<script src="rscUser/js/jquery.morelines.min.js"></script>
	<script src="rscUser/js/photoswipe.min.js"></script>
	<script src="rscUser/js/photoswipe-ui-default.min.js"></script>
	<script src="rscUser/js/main.js"></script>
</body>

</html>
