<?php
/**
 * Clase que representa al Idioma
 */
class Idioma{
/**
 * código del idioma
 * @var [integer]
 */
private $cod_idioma;
/**
 * Nombre del idioma
 * @var [String]
 */
private $nom_idioma;

/**
 * Constructor de la clase idioma
 * @param [Integer] $cod_idioma [código del idioma]
 * @param [String] $nom_idioma [Nombre del idioma]
 */
public function __construct($cod_idioma,$nom_idioma){
	$this->cod_idioma=$cod_idioma;
	$this->nom_idioma=$nom_idioma;
}


/**
 * Obtener el código del idioma
 * @return [Integer] [código del idioma]
 */
public function getCod_Idioma(){
	return $this->cod_idioma;
}

/**
 * Métodopara dar el código del idioma
 * @param [Integer] $cod_idioma [código por el que se va a modificar]
 */
public function setCod_Idioma($cod_idioma){
	$this->cod_idioma=$cod_idioma;
	return $this;
}

/**
 * Obtener el nombre del idioma
 * @return [String] [Nombre del idioma]
 */
public function getNom_Idioma(){
	return $this->nom_idioma;
}

 /**
  * Métodopara dar el nombre del idioma
  * @param [String] $nom_idioma [Nombre para el idioma]
  */
public function setNom_Idioma($nom_idioma){
		$this->nom_idioma=$nom_idioma;
		return $this;
}
}
?>
