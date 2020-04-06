<?php
/*
clase que representa a la entidad Asiento
*/

//-------------------------
//Atributos
//-------------------------

/**
 * Representa el código de identificación del asiento
 * @var [integer]
 */
 private $cod_asiento;

/**
*Representa el código del  del asiento
* @var [integer]
*/
private $cod_t_silla;

/**
* Representa la disponibilidad del asiento
* @var [String]
*/
private $disponibilidad;

//----------------------------
//Constructor
//----------------------------

/**
 * @param [integer]cod_asiento  : Número de identificación del Asiento
 * @param [integer]cod_t_silla  :  de Asiento
 * @param [String]disponibilidad:  Disponibilidad del asiento
 */
public function __construct($cod_asiento, $cod_t_silla, $disponibilidad){

  $this->cod_asiento=$cod_asiento;
	$this->cod_t_silla=$cod_t_silla;
	$this->disponibilidad=$disponibilidad;

}
 /**
  * Método para obtener  el código de identificación del asiento
  * @return [Integer] Código del asiento
  */
public function getCod_Asiento(){
	return 	$this->cod_asiento;

}

/**
 * Método para dar  el código de identificación del asiento
 * @param [Integer] Código del asiento
 */
public function setCod_Asiento($cod_t_silla){
	$this->cod_asiento=$cod_asiento;
	return $this;
}


/**
 * Método para obtener el código del  de asiento
 * @return [String] Código del  de asiento
 */
public function getCod_t_Asiento(){
	return $this->cod_t_silla;
}
/**
 * Método para dar el código del  de asiento
 * @param [String] Código del  de asiento
 */
public function setCod_t_Asiento($cod_t_silla){
	$this->cod_t_silla=$cod_t_silla;
	return $this;
}

/**
 * Método para obtener el nombre de la disponibilidad
 * @return [String] Nombre de disponibilidad
 */
public function getDisponilidad(){
	return $this->disponibilidad;
}
/**
 * Métodopara dar la disponibilidad
 * @param [String] Nombre de la disponibilidad
 */
public function setDisponilidad($disponibilidad){
	$this->disponibilidad=$disponibilidad;
	return $this;
}
 ?>
