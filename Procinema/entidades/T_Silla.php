<?php
/**
 * Clase que representa al  de silla
 */
class T_silla{
/**
 * código del  de silla
 * @var [integer]
 */
private $cod_t_silla;
/**
 * Nombre del  de silla
 * @var [String]
 */
private $nom_t_silla;

/**
 * Constructor de la clase t_silla
 * @param [Integer] $cod_t_silla [código del  de silla]
 * @param [String] $nom_t_silla [Nombre del  de silla]
 */
public function __construct($cod_t_silla,$nom_t_silla){
	$this->cod_t_silla=$cod_t_silla;
	$this->nom_t_silla=$nom_t_silla;
}


/**
 * Obtener el código del  de silla
 * @return [Integer] [código del  de silla]
 */
public function getCod_t_silla(){
	return $this->cod_t_silla;
}

/**
 * Método para dar código del  de silla
 * @param [Integer] $cod_t_silla [código por el que se va a modificar]
 */
public function setCod_t_silla($cod_t_silla){
	$this->cod_t_silla=$cod_t_silla;
	return $this;
}

/**
 * Obtener el nombre del  de silla
 * @return [String] [Nombre del  de silla]
 */
public function getNom_t_silla(){
	return $this->nom_t_silla;
}

 /**
  * Método para dar nombre del  de silla
  * @param [String] $nom_t_silla [Nuevo nombre para el t_silla]
  */
public function setNom_t_silla($nom_t_silla){
		$this->nom_t_silla=$nom_t_silla;
		return $this;
}
}
?>
