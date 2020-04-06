<?php
/**
 * Clase que representa la entidad sala
 */
class Sala{
/**
 * código de la sala
 * @var [integer]
 */
private $cod_sala;
/**
 * Nombre de la sala
 * @var [type]
 */
private $nom_sala;

/**
 * Constructor de la clase Sala
 * @param [Integer] $cod_sala [código de la sala]
 * @param [String] $nom_sala [Nombre de la sala]
 */
public function __construct($cod_sala,$nom_sala){
	$this->cod_sala=$cod_sala;
	$this->nom_sala=$nom_sala;
}


/**
 * Obtener el código de la sala
 * @return [Integer] [código de la sala]
 */
public function getCod_sala(){
	return $this->cod_sala;
}

/**
 * Modificar el código de la sala
 * @param [Integer] $cod_sala [código por el que se va a modificar]
 */
public function setCod_sala($cod_sala){
	$this->cod_sala=$cod_sala;
	return $this;
}

/**
 * Obtener el nombre de la sala
 * @return [String] [Nombre de la sala]
 */
public function getNom_sala(){
	return $this->nom_sala;
}

 /**
  * Modificar el nombre de la sala
  * @param [String] $nom_sala [Nuevo nombre para e la sala]
  */
public function setNom_sala($nom_sala){
		$this->nom_sala=$nom_sala;
		return $this;
}
}
?>
