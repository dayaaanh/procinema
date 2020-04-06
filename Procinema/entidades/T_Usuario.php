<?php
/**
 * Clase que representa al tipo de Usuario
 */
class T_usuario{
/**
 * código del tipo usuario
 * @var [integer]
 */
private $cod_t_usuario;
/**
 * Nombre del tipo usuario
 * @var [String]
 */
private $nom_t_usuario;

/**
 * Constructor de la clase T_usuario
 * @param [Integer] $cod_t_usuario [código del tipo usuario]
 * @param [String] $nom_t_usuario [Nombre del tipo usuario]
 */
public function __construct($cod_t_usuario,$nom_t_usuario){
	$this->cod_t_usuario=$cod_t_usuario;
	$this->nom_t_usuario=$nom_t_usuario;
}


/**
 * Obtener el código del tipo usuario
 * @return [Integer] [código del usuario]
 */
public function getCod_t_usuario(){
	return $this->cod_t_usuario;
}

/**
 * Método para dar código del tipo usuario
 * @param [Integer] $cod_t_usuario [código por el que se va a modificar]
 */
public function setCod_t_usuario($cod_t_usuario){
	$this->cod_t_usuario=$cod_t_usuario;
	return $this;
}

/**
 * Obtener el nombre del tipo usuario
 * @return [String] [Nombre del tipo usuario]
 */
public function getNom_t_usuario(){
	return $this->nom_t_usuario;
}

 /**
  * Método para dar nombre del tipo usuario
  * @param [String] $nom_t_usuario [Nuevo nombre para el tipo usuario]
  */
public function setNom_t_usuario($nom_t_usuario){
		$this->nom_t_usuario=$nom_t_usuario;
		return $this;
}

}
?>
