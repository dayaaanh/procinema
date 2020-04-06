<html><body>
  <?php 

              $server = "35.239.173.88";
              $user = "usuario";
              $pass = "root123";
              $bd = "cinejungla";
              $port = "3306";
              $conexion = mysqli_connect($server, $user, $pass,$bd,$port)
                or die("Ha sucedido un error inesperado en la conexion de la base de datos");
                mysqli_set_charset($conexion,"utf8");

              

$calificacion = $_POST['selectB'];
$result=$conexion->query("INSERT INTO CALIF_SERVICIOS VALUES(0,'$calificacion')") or die($conexion->error);



 ?>
<meta http-equiv="refresh" content="0; url=signin.php" />
</body>
</html>

	