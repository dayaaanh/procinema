<?php
/**
 * Clase que representa al multiplex
 */
class multiplex{
/**
 * código del multiplex
 * @var [integer]
 */
private $cod_multiplex;
/**
 * Nombre del multiplex
 * @var [String]
 */
private $nom_multiplex;

/**
 * Constructor de la clase multiplex
 * @param [Integer] $cod_multiplex [código del multiplex]
 * @param [String] $nom_multiplex [Nombre del multiplex]
 */
public function __construct($cod_multiplex,$nom_multiplex){
	$this->cod_multiplex=$cod_multiplex;
	$this->nom_multiplex=$nom_multiplex;
}


/**
 * Obtener el código del multiplex
 * @return [Integer] [código del multiplex]
 */
public function getCod_multiplex(){
	return $this->cod_multiplex;
}

/**
 * Método para dar código del multiplex
 * @param [Integer] $cod_multiplex [código por el que se va a modificar]
 */
public function setCod_multiplex($cod_multiplex){
	$this->cod_multiplex=$cod_multiplex;
	return $this;
}

/**
 * Obtener el nombre del multiplex
 * @return [String] [Nombre del multiplex]
 */
public function getNom_multiplex(){
	return $this->nom_multiplex;
}

 /**
  * Método para dar nombre del multiplex
  * @param [String] $nom_multiplex [Nuevo nombre para el multiplex]
  */
public function setNom_multiplex($nom_multiplex){
		$this->nom_multiplex=$nom_multiplex;
		return $this;
}
}
?>
