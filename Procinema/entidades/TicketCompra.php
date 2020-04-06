<?php
/*
Clase que representa a la entidad TicketCompra
*/
class TicketCompra implements SujetoTicketCompra{
//-------------------------
//Atributos
//-------------------------

  /**
  *Representa el numero de identificación del Ticket de compra
  * @var [integer]
  */
  private $cod_ticket;

  /**
  * Representa el código de identificación del usuario
  * @var [integer]
  */
  private $cod_usuario;

  /**
  * Representa el código de identificación del multiplex
  * @var [integer]
  */
  private $cod_multiplex;

  /**
  * Representa el código de identificación de la forma de pago
  * @var [integer]
  */
  private $cod_f_pago;

  /**
  * Representa el código de identificación de la confiteria
  * @var [integer]
  */
  private $cod_confiteria;

  /**
  * Representa el código de identificación del cliente
  * @var [integer]
  */
  private $cod_cliente;

  /**
  * Representa la fecha de compra del Ticket
  * @var [date]
  */
  private $fecha_compra;

  /**
  * Representa el estado del Ticket
  * @var [String]
  */
  private $estado;

  /**
  * Representa el precio del Ticket
  * @var [integer]
  */
  private $precio;

//----------------------------
//Constructor
//----------------------------


/**
 * @param [integer]cod_ticket : Número de identificación del ticket de compra
* @param [integer]cod_usuario : Número de identificación del usuario
* @param [integer]cod_multiplex : Número de identificación del multiplex
* @param [integer]cod_f_pago : Número de identificación de la forma de pago
* @param [integer]cod_confiteria : Número de identificación de la confiteria
* @param [integer]cod_cliente : Número de identificación del cliente
* @param [date]fecha_compra : Fecha de la compra del Ticket
* @param [String]estado: Estado del ticket
* @param [integer]precio: Precio del ticket
 */
public function __construct($cod_ticket,$cod_usuario, $cod_multiplex, $cod_f_pago, $cod_confiteria, $cod_cliente, $fecha_compra, $estado,$precio){

	$this->cod_ticket=$cod_ticket;
	$this->cod_usuario=$cod_usuario;
	$this->cod_multiplex=$cod_multiplex;
  $this->cod_f_pago=$cod_f_pago;
  $this->cod_confiteria=$cod_confiteria;
  $this->cod_cliente=$cod_cliente;
  $this->fecha_compra=$fecha_compra;
	$this->estado=$estado;
	$this->precio=$precio;
}

/**
 * Metodo para obtener la identificación del ticket
 * @return [integer]Identificación del ticket
 */
public function getCod_Ticket(){
	return $this->cod_ticket;
}

/**
 * Método que modifica el número de identificación del ticket
 * @param [integer]Numero a modificar
 */
public function setCod_Ticket($cod_ticket){
	$this->cod_ticket=$cod_ticket;
	return $this;
}

/**
 * Obtener el usuario
 * @return [String] [Usuario]
 */
public function getCod_Usuario(){
	return $this->cod_usuario;
}

/**
 * Modificar el usuario
 * @param [Void] $cod_usuario [Nuevo usuario]
 */
public function setCod_Usuario($cod_usuario){
	$this->cod_usuario=$cod_usuario;
	return $this;
}

/**
 * Obtener el código del multiplex
 * @return [Integer] [código del multiplex]
 */
public function getCod_Multiplex(){
	return $this->cod_multiplex;
}

/**
 * Modificar el código del multiplex
 * @param [Integer] $cod_multiplex [código por el que se va a modificar]
 */
public function setCod_Multiplex($cod_multiplex){
	$this->cod_multiplex=$cod_multiplex;
	return $this;
}


/**
 * Obtener el código de la forma de pago
 * @return [Integer] [código del f_pago]
 */
public function getCod_f_pago(){
	return $this->cod_f_pago;
}

/**
 * Modificar el código de la forma de pago
 * @param [Integer] $cod_f_pago [código por el que se va a modificar]
 */
public function setCod_f_pago($cod_f_pago){
	$this->cod_f_pago=$cod_f_pago;
	return $this;
}


/**
 * Obtener el código de la confiteria
 * @return [Integer] [código de la confiteria]
 */
public function getCod_confiteria(){
	return $this->cod_confiteria;
}

/**
 * Modificar el código de la confiteria
 * @param [Integer] $cod_confiteria [código por el que se va a modificar]
 */
public function setCod_confiteria($cod_confiteria){
	$this->cod_confiteria=$cod_confiteria;
	return $this;
}


/**
 * Obtener el código del cliente
 * @return [Integer] [código del cliente]
 */
public function getCod_cliente(){
	return $this->cod_cliente;
}

/**
 * Modificar el código del cliente
 * @param [Integer] $cod_cliente [código por el que se va a modificar]
 */
public function setCod_cliente($cod_cliente){
	$this->cod_cliente=$cod_cliente;
	return $this;
}
/**
 * Metodo para obtener la fecha de compra del ticket
 * @return [String]Fecha de compra del ticket
 */
public function getFecha_compra(){
	return $this->fecha_compra;
}
/**
 * Metodo para modificar la fecha de compra del ticket
 * @param [String] Fecha de compra del ticket
 *
 */
public function setFecha_compra($fecha_compra){
	$this->fecha_compra=$fecha_compra;
	return $this;
}

/**
 * Metodo para obtener la estado del ticket
 * @return [String]Estado del ticket
 */
public function getEstado(){
	return $this->estado;
}
/**
 * Metodo para modificar el estado del ticket
 * @param [String] Estado del ticket
 *
 */
public function setEstado($estado){
	$this->estado=$estado;
	return $this;
}

/**
 * Metodo para obtener la precio del tickets
 * @return [precio] precio del ticket
 */
 function getPrecio(){
	return $this->precio;
}

/**
 * Metodo para modificar la precio del ticket
 * @param [precio] precio a modificar
 */
public function setPrecio($precio){
	$this->precio=$precio;
	return $this;
}



public SujetoTicketCompra ()
{
  observan = new TicketCompra[10];
}
 public TicketCompra agregar (TicketCompra e)
{

}
 public void TicketCompra notifica 
{

}
 public void suprime(TicketCompra e)
{

}
}

?>
