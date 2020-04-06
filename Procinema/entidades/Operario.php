<?
/*
clase  Operario
*/
public class Operario implements Usuarios{
/**
 * código del usuario
 * @var [integer]
 */
private $cod_usuario;

/**
 * Nombre del usuario
 * @var [String]
 */
private $nom_usuario;

/**
 * código del tipo de usuario
 * @var [integer]
 */
private $cod_t_usuario;

/**
 * salario del usuario
 * @var [integer]
 */
private $salario;

/**
 * Tiempo de contrato del usuario
 * @var [integer]
 */
private $fecha_contrato;

/**
 * Código del Multiplex asociado
 * @var [integer]
 */
private $cod_multiplex;

/**
 * Contraseña del Usuario
 * @var [String]
 */
private $password;

private $correo;
/*
Método de creación de usuario operario
*/
public void crearUsuario($cod_usuario,$nom_usuario, $cod_t_usuario, $salario, $fecha_contrato, $cod_multiplex, $password, $correo);
$this->cod_usuario=$cod_usuario;
	$this->nom_usuario=$nom_usuario;
	$this->cod_t_usuario=$cod_t_usuario;
	$this->salario=$salario;
	$this->fecha_contrato=$fecha_contrato;
	$this->cod_multiplex=$cod_multiplex;
  $this->password=$password;
	$this->correo=$correo;
}

?>