<html>
<?php

require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Sala.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/daos/SalaDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');


$conexion = new Conexion();
$con = $conexion->conectarBD();

$codigo=$_GET["codigo"];
$nombre=$_POST["nombre"];


$salaDAO = new SalaDAO($con);
$salaEditado = new Sala($codigo,$nombre);
$salaDAO->modificarSala($salaEditado);


?>
<meta http-equiv="refresh" content="0; url=salas.php" />
</html>
