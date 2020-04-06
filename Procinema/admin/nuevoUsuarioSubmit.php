<html>
<?php
session_start();

require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/daos/UsuarioDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Usuario.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

$conexion = new Conexion();
$con = $conexion->conectarBD();

$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$salario=$_POST["salario"];
$fecha=$_POST["fecha"];
$password=$_POST["password"];
$correo=$_POST["correo"];

$usuarioDAO = new UsuarioDAO($con);
$usuarioNuevo = new Usuario($codigo, $nombre, 2, $salario, $fecha, $_SESSION['multiplex'], $password, $correo);
$usuarioDAO->crearUsuario($usuarioNuevo);


?>
<meta http-equiv="refresh" content="0; url=usuarios.php" />
</html>
