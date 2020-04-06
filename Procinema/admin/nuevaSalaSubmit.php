<html>
<?php

require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/daos/SalaDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Sala.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

$conexion = new Conexion();
$con = $conexion->conectarBD();

$nombre=$_POST["nombre"];


$salaDAO = new SalaDAO($con);
$salaNuevo = new Sala(0, $nombre);
$salaDAO->crearSala($salaNuevo);


?>
<meta http-equiv="refresh" content="0; url=salas.php" />
</html>
