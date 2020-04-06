<?php
/*
clase que representa a la entidad auditoria
*/
class Auditoria implements ObservadorAuditoria {
//-------------------------
//Atributos
//-------------------------

/**
*Representa el codigo de identificacion del usuario 
*@var [integer]
*/
private $cod_usuario;
/**
*Representa el codigo del tipo de usuario que realizo la accion
*@var [integer]
*/
private $cod_t_usuario;
/**
*Representa el codigo del tipo de usuario que realizo la accion
*@var [String]
*/
private $nom_usuario;
/**
*Representa la operacion realizada
*@var [String]
*/
private $operacion;

/**
*Representa la feca de creación de la auditoria
*@var [Date]
*/
private $fecha_operacion;

/**
*Representa la ip del computador que realizo la accion
*@var [String]
*/
private $ip;

//----------------------------
//Constructor
//----------------------------


/**
 * @param [integer]cod_cliente : Número de identificación del cliente
 * @param [String]nom_cliente : Nombre del cliente
 * @param [String]correo_electronico : Correo electrónico del cliente
 * @param [integer] puntos : Cantidad de Puntos del Cliente
 */
public function __construct($cod_usuario,$cod_t_usuario, $nom_usuario,$operacion,$fecha_operacion,$ip){

	$this->cod_usuario=$cod_usuario;
	$this->cod_t_usuario=$cod_t_usuario;
	$this->nom_usuario=$nom_usuario;
	$this->operacion=$operacion;
	$this->fecha_operacion=$fecha_operacion;
	$this->ip->$ip;
}


/**
 * Método para obtiene la identificacion del usuario
 * @return [integer]Identificación del usuario
 */
public function getCod_usuario(){
	return $this->cod_usuario;
}

/**
 * Método que cambiar el número de identificación del cliente
 * @param [integer] codigo a modificar
 */
public function setCod_usuario($cod_usuario){
	$this->cod_usuario=$cod_usuario;
	return $this;
}

/**
 * Método para obtiene la identificacion del tipo de usuario
 * @return [integer]Identificación del tipo de usuario
 */
public function getCod_t_usuario){
	return $this->cod_t_usuario;
}

/**
 * Método que cambiar el número de identificación del cliente
 * @param [integer] codigo de modificacion
 */
public function setCod_t_usuario($cod_t_usuario){
	$this->cod_t_usuario=$cod_t_usuario;
	return $this;
}

/**
 * Método para obtener el nombre del cliente
 * @return [String] Nombre del cliente
 */
public function getNom_usuario(){
	return $this->nom_usuario;
}

/**
 *  Método para cambiar el nombre del cliente
 * @param [String] Nombre del cliente
 */
public function setNomusuario($nom_usuario){
	$this->nom_usuario=$nom_usuario;
	return $this;
}

/**
 * Método para obtener la operacion realizada
 * @return [String] Nombre de la operacion
 */
public function getOperacion(){
	return $this->operacion;
}

/**
 *  Método para cambiar operacion 
 * @param [String] Nombra de la operacion
 */
public function setOperacion($operacion){
	$this->operacion=$operacion;
	return $this;
}

/**
 * Método para obtener la fecha de la operacion
 * @return [String] fecha de la operacion
 */
public function getFecha_operacion(){
	return $this->fecha_operacion;
}
/**
 * Método para cambiar la fecha de la auditoria
 * @param [Date]fecha de la auditoria
 */
public function setFecha_operacion($fecha_operacion){
	$this->fecha_operacion=$fecha_operacion;
	return $this;
}

/**
 * Método para obtener los puntos del cliente
 * @return [String] puntos del cliente
 */
 public function getIp(){
	return $this->ip;
}

/**
 * método para cambiar la ip
 * @param [integer] ip a modificar
 */
public function setIp($ip){
	$this->ip=$ip;
	return $this;
}

public void actualizar();{}

}

?>
