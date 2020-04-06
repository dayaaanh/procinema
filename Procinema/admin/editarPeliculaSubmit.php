<html>
<?php 


require_once($_SERVER['DOCUMENT_ROOT'] .'/procinema/Procinema/daos/PeliculaDAO.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/procinema/Procinema/entidades/Pelicula.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/procinema/Procinema/util/Conexion.php');
$conexion = new Conexion();
$con = $conexion->conectarBD();

$codigo=$_GET["codigo"];
$nombre=$_POST["nombre"];
$genero=$_POST["selectG"];
$idioma=$_POST["selectI"];
$horario=$_POST["selectH"];
$descripcion=$_POST["descripcion"];
$calificacion=$_POST["calificacion"];
$fecha=$_POST["fecha"];
$duracion=$_POST["duracion"];


$peliculaDAO = new PeliculaDAO($con);
$peliculaEditado = new Pelicula($codigo, $nombre, $genero, $idioma,$horario,$descripcion,$calificacion,$fecha,$duracion);
$peliculaDAO->modificarPelicula($peliculaEditado);


?>
<meta http-equiv="refresh" content="0; url=peliculas.php" />
</html>
