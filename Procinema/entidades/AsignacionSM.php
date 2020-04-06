<?php
/**
 * Clase que representa la entidad Asignación Sala-Multiplex
 */
class AsignacionSM{

/**
 * código de la sala
 * @var [integer]
 */
private $cod_sala;

/**
 * código del multiplex
 * @var [type]
 */
private $cod_multiplex;

/**
 * Constructor de la clase AsignacionSM
 * @param [Integer] $cod_sala [código de la sala]
 * @param [Integer] $cod_multiplex [código del multiplex]
 */
public function __construct($cod_sala, $cod_multiplex){
    $this->cod_sala=$cod_sala;
	  $this->cod_multiplex=$cod_multiplex;
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
 * Obtener el código del multiplex
 * @return [Integer] [código del multiplex]
 */
public function getCod_multiplex(){
	return $this->cod_multiplex;
}

/**
 * Modificar el código del multiplex
 * @param [Integer] $cod_multiplex [código por el que se va a modificar]
 */
public function setCod_multiplex($cod_multiplex){
	$this->cod_multiplex=$cod_multiplex;
	return $this;
}

}
?>
