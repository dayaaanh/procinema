<?php
/**
 * Clase que representa al Horario
 */
class Horario{
/**
 * código del horario
 * @var [integer]
 */
private $cod_horario;
/**
 * Nombre del horario
 * @var [String]
 */
private $nom_horario;

/**
 * Constructor de la clase horario
 * @param [Integer] $cod_horario [código del horario]
 * @param [String] $nom_horario [Nombre del horario]
 */
public function __construct($cod_horario,$nom_horario){
	$this->cod_horario=$cod_horario;
	$this->nom_horario=$nom_horario;
}


/**
 * Obtener el código del horario
 * @return [Integer] [código del horario]
 */
public function getCod_horario(){
	return $this->cod_horario;
}

/**
 * Método para dar código del horario
 * @param [Integer] $cod_horario [código por el que se va a modificar]
 */
public function setCod_horario($cod_horario){
	$this->cod_horario=$cod_horario;
	return $this;
}

/**
 * Obtener el nombre del horario
 * @return [String] [Nombre del horario]
 */
public function getNom_horario(){
	return $this->nom_horario;
}

 /**
  * Método para dar nombre del horario
  * @param [String] $nom_horario [Nuevo nombre para el horario]
  */
public function setNom_horario($nom_horario){
		$this->nom_horario=$nom_horario;
		return $this;
}
}
?>
