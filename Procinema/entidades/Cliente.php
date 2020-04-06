<?php
/*
clase que representa a la entidad cliente
*/
class Cliente{
//-------------------------
//Atributos
//-------------------------

/**
*Representa el número de identificación del cliente sea c.c / c.e etc
*@var [integer]
*/
private $cod_cliente;
/**
*Representa el nombre del cliente
*@var [String]
*/
private $nom_cliente;
/**
*Representa el correo electronico del cliente
*@var [String]
*/
private $correo_electronico;
/**
*Representa la cantidad de puntos que tiene el cliente
*@var [integer]
*/
private $puntos;

//----------------------------
//Constructor
//----------------------------


/**
 * @param [integer]cod_cliente : Número de identificación del cliente
 * @param [String]nom_cliente : Nombre del cliente
 * @param [String]correo_electronico : Correo electrónico del cliente
 * @param [integer] puntos : Cantidad de Puntos del Cliente
 */
public function __construct($cod_cliente,$nom_cliente, $correo_electronico,$puntos){

	$this->cod_cliente=$cod_cliente;
	$this->nom_cliente=$nom_cliente;
	$this->correo_electronico=$correo_electronico;
	$this->puntos=$puntos;
}


/**
 * Métodopara obtener la identificación del cliente
 * @return [integer]Identificación del cliente
 */
public function getCod_cliente(){
	return $this->cod_cliente;
}

/**
 * Método que dar el número de identificación del cliente
 * @param [integer] Número a modificar
 */
public function setCod_cliente($cod_cliente){
	$this->cod_cliente=$cod_cliente;
	return $this;
}

/**
 * Método para obtener el nombre del cliente
 * @return [String] Nombre del cliente
 */
public function getNom_cliente(){
	return $this->nom_cliente;
}

/**
 *  Método para dar el nombre del cliente
 * @param [String] Nombre del cliente
 */
public function setNomcliente($nom_cliente){
	$this->nom_cliente=$nom_cliente;
	return $this;
}

/**
 * Método para obtener el correo del cliente
 * @return [String] Correo del cliente
 */
public function getEmail(){
	return $this->correo_electronico;
}

/**
 * Método para dar el correo del cliente
 * @param [String]Correo del cliente
 */
public function setEmail($correo_electronico){
	$this->correo_electronico=$correo_electronico;
	return $this;
}

/**
 * Método para obtener los puntos del cliente
 * @return [integer] puntos del cliente
 */
 function getPuntos(){
	return $this->puntos;
}

/**
 * método para dar los puntos del cliente
 * @param [integer] puntos a modificar
 */
public function setPuntos($puntos){
	$this->puntos=$puntos;
	return $this;
}
}

?>
