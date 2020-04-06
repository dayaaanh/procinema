<?php
/**
 * Clase que representa a la forma de pago
 */
class f_pago{
/**
 * código de la forma de pago
 * @var [integer]
 */
private $cod_f_pago;
/**
 * Nombre del f_pago
 * @var [String]
 */
private $nom_f_pago;

/**
 * Constructor de la clase f_pago
 * @param [Integer] $cod_f_pago [código de la forma de pago]
 * @param [String] $nom_f_pago [Nombre de la forma de pago]
 */
public function __construct($cod_f_pago,$nom_f_pago){
	$this->cod_f_pago=$cod_f_pago;
	$this->nom_f_pago=$nom_f_pago;
}

/**
 * Obtener el código de la forma de pago
 * @return [Integer] [código del de la forma de pago]
 */
public function getCod_f_pago(){
	return $this->cod_f_pago;
}

/**
 * Modificar de la forma de pago
 * @param [Integer] $cod_f_pago [código por el que se va a modificar]
 */
public function setCod_f_pago($cod_f_pago){
	$this->cod_f_pago=$cod_f_pago;
	return $this;
}

/**
 * Obtener de la forma de pago
 * @return [String] [Nombre del f_pago]
 */
public function getNom_f_pago(){
	return $this->nom_f_pago;
}

 /**
  * Modificar la forma de pago
  * @param [String] $nom_f_pago [Nombre para la forma de pago]
  */
public function setNom_f_pago($nom_f_pago){
		$this->nom_f_pago=$nom_f_pago;
		return $this;
}
}
?>
