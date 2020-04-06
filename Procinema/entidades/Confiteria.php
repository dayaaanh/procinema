<?php
/*
Clase que representa a la entidad Confiteria
*/
class Confiteria{
//-------------------------
//Atributos
//-------------------------

/**
*Representa el número de identificación de la confiteria
*@var [integer]
*/
private $cod_confiteria;
/**
*Representa el nombre de la confiteria
*@var [String]
*/
private $nom_confiteria;
/**
*Representa el descripcion electronico de la confiteria
*@var [String]
*/
private $descripcion;
/**
*Representa la cantidad de cantidad que tiene el confiteria
*@var [integer]
*/
private $cantidad;

//----------------------------
//Constructor
//----------------------------

/**
 * @param [integer]cod_confiteria : Número de identificación de la confiteria
 * @param [String]nom_confiteria : Nombre de la confiteria
 * @param [String]descripcion : descripcion electrónico de la confiteria
 * @param [integer] cantidad : Cantidad de cantidad de la confiteria
 */
public function __construct($cod_confiteria,$nom_confiteria, $descripcion,$cantidad){

	$this->cod_confiteria=$cod_confiteria;
	$this->nom_confiteria=$nom_confiteria;
	$this->descripcion=$descripcion;
	$this->cantidad=$cantidad;
}


/**
 * Métodopara obtener la identificación de la confiteria
 * @return [integer]Identificación de la confiteria
 */
public function getCod_confiteria(){
	return $this->cod_confiteria;
}

/**
 * Método que dar el número de identificación de la confiteria
 * @param [integer] Número a modificar
 */
public function setCod_confiteria($cod_confiteria){
	$this->cod_confiteria=$cod_confiteria;
	return $this;
}

/**
 * Método para obtener el nombre de la confiteria
 * @return [String] Nombre de la confiteria
 */
public function getNom_confiteria(){
	return $this->nom_confiteria;
}

/**
 *  Método para dar el nombre de la confiteria
 * @param [String] Nombre de la confiteria
 */
public function setNomconfiteria($nom_confiteria){
	$this->nom_confiteria=$nom_confiteria;
	return $this;
}

/**
 * Método para obtener el descripcion de la confiteria
 * @return [String] descripcion de la confiteria
 */
public function getDescripcion(){
	return $this->descripcion;
}

/**
 * Método para dar el descripcion de la confiteria
 * @param [String]descripcion de la confiteria
 */
public function setDescripcion($descripcion){
	$this->descripcion=$descripcion;
	return $this;
}

/**
 * Método para obtener los cantidad de la confiteria
 * @return [integer] cantidad de la confiteria
 */
 function getcantidad(){
	return $this->cantidad;
}

/**
 * método para dar los cantidad de la confiteria
 * @param [integer] cantidad a modificar
 */
public function setcantidad($cantidad){
	$this->cantidad=$cantidad;
	return $this;
}
}

?>
