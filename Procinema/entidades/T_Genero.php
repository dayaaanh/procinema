<?php
/**
 * Clase que representa al Género
 */
class T_Genero{
/**
 * código del género
 * @var [integer]
 */
private $cod_genero;
/**
 * Nombre del género
 * @var [String]
 */
private $nom_genero;

/**
 * Constructor de la clase genero
 * @param [Integer] $cod_genero [código del género]
 * @param [String] $nom_genero [Nombre del género]
 */
public function __construct($cod_genero,$nom_genero){
	$this->cod_genero=$cod_genero;
	$this->nom_genero=$nom_genero;
}


/**
 * Obtener el código del género
 * @return [Integer] [código del género]
 */
public function getCod_genero(){
	return $this->cod_genero;
}

/**
 * Método para dar código del género
 * @param [Integer] $cod_genero [código por el que se va a modificar]
 */
public function setCod_genero($cod_genero){
	$this->cod_genero=$cod_genero;
	return $this;
}

/**
 * Obtener el nombre del género
 * @return [String] [Nombre del género]
 */
public function getNom_genero(){
	return $this->nom_genero;
}

 /**
  * Método para dar nombre del género
  * @param [String] $nom_genero [Nuevo nombre para el genero]
  */
public function setNom_genero($nom_genero){
		$this->nom_genero=$nom_genero;
		return $this;
}
}
?>
