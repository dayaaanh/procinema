<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/daos/UsuarioDAO.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Usuario.php');
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

$conexion = new Conexion();
$con = $conexion->conectarBD();

$correo=$_POST["correo"];
$password=$_POST["password"];

$usuarioDAO = new UsuarioDAO($con);
$usuario = $usuarioDAO->obtenerUsuarioCorreo($correo);


if($usuario == null)
{

}
else
{
  if($usuario->getPassword() == $password)
  {
    if($usuario->getCod_t_usuario() == 1)
    {
      $_SESSION['multiplex'] = $usuario->getCod_Multiplex();
      $_SESSION['codigo'] = $usuario->getCod_usuario();
      ?>
<html>
      <meta http-equiv="refresh" content="0; url=admin/usuarios.php" />

      <?php
    }
    else
    {

    }
  }
  else
  {

  }
}




?>
</html>
