<html>
<?php

require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Cliente.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/daos/ClienteDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

$conexion = new Conexion();
$con = $conexion->conectarBD();

$codigo=$_GET["codigo"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$puntos=$_POST["puntos"];

$clienteDAO = new ClienteDAO($con);
$clienteEditado = new Cliente($codigo, $nombre, $correo, $puntos);
$clienteDAO->modificarCliente($clienteEditado);


?>
<meta http-equiv="refresh" content="0; url=clientes.php" />
</html>
