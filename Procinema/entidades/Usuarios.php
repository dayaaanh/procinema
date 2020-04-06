<?
/*
clase abstracta FactoryUsuiaro
*/
abstract public interface Usuarios
/**
 * código del usuario
 * @var [integer]
 */
abstract private $cod_usuario;

/**
 * Nombre del usuario
 * @var [String]
 */
abstract private $nom_usuario;

/**
 * código del tipo de usuario
 * @var [integer]
 */
abstract private $cod_t_usuario;

/**
 * salario del usuario
 * @var [integer]
 */
abstract private $salario;

/**
 * Tiempo de contrato del usuario
 * @var [integer]
 */
abstract private $fecha_contrato;

/**
 * Código del Multiplex asociado
 * @var [integer]
 */
abstract private $cod_multiplex;

/**
 * Contraseña del Usuario
 * @var [String]
 */
abstract  private $password;

abstract  private $correo;
/*
método abstracto de actualización
*/
abstract public void crearUsuario($cod_usuario,$nom_usuario, $cod_t_usuario, $salario, $fecha_contrato, $cod_multiplex, $password, $correo);

}

?>