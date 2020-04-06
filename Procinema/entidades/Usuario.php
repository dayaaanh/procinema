<?php
/**
 * Clase que representa al  de Usuario
 */
interface FactoryUsuario{
 /*
 método abstracto de actualización
 */
 public function FactoryUsuario();

 }
class Usuario implements FactoryUsuario{
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


/**
 * Constructor de la clase usuario
 * @param [Integer] $cod_usuario [código del usuario]
 * @param [String] $nom_usuario [Nombre del usuario]
 * @param [Integer] $cod_t_usuario [código del tipo de usuario]
 * @param [Integer] $salario [salario del usuario]
 * @param [Integer] $fecha_contrato [Fecha de contrato del usuario]
 * @param [Integer] $cod_multiplex [Código del Multiplex asociado]
 * @param [String] $password [contraseña del  usuario]
 */
public function __construct($cod_usuario,$nom_usuario, $cod_t_usuario, $salario, $fecha_contrato, $cod_multiplex, $password, $correo){
	$this->cod_usuario=$cod_usuario;
	$this->nom_usuario=$nom_usuario;
	$this->cod_t_usuario=$cod_t_usuario;
	$this->salario=$salario;
	$this->fecha_contrato=$fecha_contrato;
	$this->cod_multiplex=$cod_multiplex;
  $this->password=$password;
	$this->correo=$correo;
}

/**
 * Obtener el código del  usuario
 * @return [Integer] [código del usuario]
 */
public function getCod_usuario(){
	return $this->cod_usuario;
}

/**
 * Método para dar código del usuario
 * @param [Integer] $cod_usuario [código por el que se va a modificar]
 */
public function setCod_usuario($cod_usuario){
	$this->cod_usuario=$cod_usuario;
	return $this;
}

/**
 * Obtener el nombre del usuario
 * @return [String] [Nombre del  usuario]
 */
public function getNom_usuario(){
	return $this->nom_usuario;
}

 /**
  * Método para dar nombre del usuario
  * @param [String] $nom_usuario [Nuevo nombre para el  usuario]
  */
public function setNom_usuario($nom_usuario){
		$this->nom_usuario=$nom_usuario;
		return $this;
}

/**
 * Metodo para obtener el código del tipo de usuario
 * @return [Integer]Tipo de Usuario
 */
public function getCod_t_usuario(){
	return $this->cod_t_usuario;
}
/**
 * Metodo para modificar código del tipo de usuario
 * @param [Integer] Tipo de Usuario
 *
 */
public function setCod_t_usuario($cod_t_usuario){
	$this->cod_t_usuario=$cod_t_usuario;
	return $this;
}
/**
 * Metodo para obtener el salario del usuario
 * @return [Integer] Salario del usuario
 */
public function getSalario(){
	return $this->salario;
}
/**
 * Metodo para modificar el salario del usuario
 * @param [Integer] Salario del usuario
 *
 */
public function setSalario($salario){
	$this->salario=$salario;
	return $this;
}
/**
 * Metodo para obtener la Fecha de Contrato del Usuario
 * @return [Integer] Fecha de Contrato
 */
public function getFecha_Contrato(){
	return $this->fecha_contrato;
}
/**
 * Metodo para modificar la Fecha de Contrato del Usuario
 * @param [Integer] Fecha de Contrato
 *
 */
public function setFecha_Contrato($fecha_contrato){
	$this->fecha_contrato=$fecha_contrato;
	return $this;
}
/**
 * Metodo para obtener el código del multiplex asociado
 * @return [Integer]Código Multiplex
 */
public function getCod_Multiplex(){
	return $this->cod_multiplex;
}
/**
 * Metodo para modificar código del multiplex asociado
 * @param [Integer] Código Multiplex
 *
 */
public function setCod_Multiplex($cod_multiplex){
	$this->cod_multiplex=$cod_multiplex;
	return $this;
}

/**
 * Obtener la Contraseña
 * @return [String] [password]
 */
public function getPassword(){
	return $this->password;
}

 /**
  * Modificar la Contraseña
  * @param [String] $password [Modificar contraseña]
  */
public function setPassword($password){
		$this->password=$password;
		return $this;
}

public function getCorreo(){
	return $this->correo;
}

 /**
  * Modificar la Contraseña
  * @param [String] $password [Modificar contraseña]
  */
public function setCorreo($correo){
		$this->correo=$correo;
		return $this;
}

public function FactoryUsuario()
{

}
}
?>
