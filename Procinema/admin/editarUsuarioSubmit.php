<html>
<?php

require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/daos/UsuarioDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Usuario.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

$conexion = new Conexion();
$con = $conexion->conectarBD();

$codigo=$_GET["codigo"];
$nombre=$_POST["nombre"];
$salario=$_POST["salario"];
$fecha=$_POST["fecha"];
$password=$_POST["password"];
$correo=$_POST["correo"];

$usuarioDAO = new UsuarioDAO($con);
$usuarioEditado = new Usuario($codigo, $nombre, $usuarioDAO->consultarUsuario($codigo)->getCod_t_usuario(), $salario, $fecha, $usuarioDAO->consultarUsuario($codigo)->getCod_Multiplex(), $password, $correo);
$usuarioDAO->modificarUsuario($usuarioEditado);


?>
<meta http-equiv="refresh" content="0; url=usuarios.php" />
</html>
