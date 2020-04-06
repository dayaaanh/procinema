<?php
/**
 * Clase que representa la entidad Asignación Pelicula-Sala-Asiento
 */
class AsignacionPSA{

/**
* código de la Película
* @var [integer]
*/
private $cod_pelicula;

/**
 * código de la sala
 * @var [integer]
 */
private $cod_sala;


/**
 * código del asiento
 * @var [type]
 */
private $cod_asiento;

/**
 * Constructor de la clase Sala
 * @param [Integer] $cod_pelicula [código de la Película]
 * @param [Integer] $cod_sala [código de la sala]
 * @param [Integer] $cod_asiento [código del asiento]
 */
public function __construct($cod_pelicula,$cod_sala, $cod_asiento){
  $this->cod_pelicula=$cod_pelicula;
  $this->cod_sala=$cod_sala;
	$this->cod_asiento=$cod_asiento;
}

/**
 * Obtener el código de la Película
 * @return [Integer] [código de la Película]
 */
public function getCod_Pelicula(){
	return $this->cod_pelicula;
}

/**
 * Modificar el código de la Película
 * @param [Integer] $cod_pelicula [código por el que se va a modificar]
 */
public function setCod_Pelicula($cod_pelicula){
	$this->cod_pelicula=$cod_pelicula;
	return $this;
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
 * Obtener el código del asiento
 * @return [Integer] [código del asiento]
 */
public function getCod_Asiento(){
	return $this->cod_asiento;
}

/**
 * Modificar el código del asiento
 * @param [Integer] $cod_sala [código por el que se va a modificar]
 */
public function setCod_Asiento($cod_asiento){
	$this->cod_asiento=$cod_asiento;
	return $this;
}

}
?>
