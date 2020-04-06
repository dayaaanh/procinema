<?php
/*
Clase que representa a la entidad Pelicula
*/
class Pelicula{
//-------------------------
//Atributos
//-------------------------

  /**
  *Representa el numero de identificación de la película
  * @var [integer]
  */
  private $cod_pelicula;

  /**
  * Representa el nombre de la película
  * @var [String]
  */
  private $nom_pelicula;

  /**
  * Representa el código de identificacióndel género
  * @var [integer]
  */
  private $cod_genero;

  /**
  * Representa el código de identificación del idioma
  * @var [integer]
  */
  private $cod_idioma;

  /**
  * Representa la descripcion de la película
  * @var [String]
  */
  private $descripcion;

  /**
  * Representa el tiempo de duracion de la película
  * @var [integer]
  */
  private $duracion;

  /**
  * Representa el horario de la película
  * @var [Integer]
  */
  private $cod_horario;

  /**
  * Representa la calificacion de la película
  * @var [Integer]
  */
  private $calificacion;
 /**
  * Representa la fecha de publicacion
  * @var [Date]
  */
  private $fecha_publicacion;

  private $fecha;


//----------------------------
//Constructor
//----------------------------


/**
 * @param [integer]cod_pelicula : Número de referencia de la película
* @param [String]nom_pelicula : Nombre de la película
* @param [integer]cod_genero : Número de identificacióndel género
* @param [integer]cod_idioma : Número de identificación del idioma
* @param [String]descripcion : Número de identificación de la descripcion
* @param [String]duracion : Tiempo de duracion
* @param [integer]cod_horario : Número de identificación del horario de la película
* @param [integer]calificacion: Calificacion de la película
 */
public function __construct($cod_pelicula,$nom_pelicula,$cod_genero, $cod_idioma, $cod_horario, $descripcion,  $calificacion, $fecha, $duracion){

  $this->cod_pelicula=$cod_pelicula;
  $this->nom_pelicula=$nom_pelicula;
  $this->cod_genero=$cod_genero;
  $this->cod_idioma=$cod_idioma;
  $this->cod_horario=$cod_horario;
  $this->descripcion=$descripcion;
  $this->calificacion=$calificacion;
  $this->fecha=$fecha;
  $this->duracion=$duracion; 
  
}

/**
 * Metodo para obtener la identificación de la película
 * @return [integer]Identificación de la película
 */
public function getCod_pelicula(){
  return $this->cod_pelicula;
}

/**
 * Método que modifica el número de identificación de la película
 * @param [integer]Numero a modificar
 */
public function setCod_pelicula($cod_pelicula){
  $this->cod_pelicula=$cod_pelicula;
  return $this;
}

/**
 * Obtener el nombre de la película
 * @return [String] [Usuario]
 */
public function getNom_pelicula(){
  return $this->nom_pelicula;
}

/**
 * Modificar el nombre de la película
 * @param [String] $nom_pelicula [Nombre nuevo]
 */
public function setNom_pelicula($nom_pelicula){
  $this->nom_pelicula=$nom_pelicula;
  return $this;
}

/**
 * Obtener el código del género
 * @return [Integer] [códigodel género]
 */
public function getCod_genero(){
  return $this->cod_genero;
}

/**
 * Modificar el código del género
 * @param [Integer] $cod_genero [código por el que se va a modificar]
 */
public function setCod_genero($cod_genero){
  $this->cod_genero=$cod_genero;
  return $this;
}

/**
 * Obtener el código del idioma
 * @return [Integer] [código del idioma]
 */
public function getCod_idioma(){
  return $this->cod_idioma;
}

/**
 * Modificar el código del idioma
 * @param [Integer] $cod_idioma [código por el que se va a modificar]
 */
public function setCod_idioma($cod_idioma){
  $this->cod_idioma=$cod_idioma;
  return $this;
}


/**
 * Obtener la descripción
 * @return [String] [Descripción]
 */
public function getDescripcion(){
  return $this->descripcion;
}

/**
 * Modificar la descripción
 * @param [String] $descripcion [Descripcion a modificar]
 */
public function setDescripcion($descripcion){
  $this->descripcion=$descripcion;
  return $this;
}


/**
 * Obtener la duración de la pelicula
 * @return [String] [duracion]
 */
public function getDuracion(){
  return $this->duracion;
}

/**
 * Modificar la duración de la pelicula
 * @param [String] $duracion [duracion a modificar]
 */
public function setDuracion($duracion){
  $this->duracion=$duracion;
  return $this;
}

/**
 * Metodo para obtener el código del horario de la película
 * @return [integer] código del horario de la película
 */
 function getCod_Horario(){
  return $this->cod_horario;
}

/**
 * Metodo para modificar el código del horario de la película
 * @param [integer] código del horario a modificar
 */
public function setCod_Horario($cod_horario){
  $this->cod_horario=$cod_horario;
  return $this;
}

/**
 * Metodo para obtener la calificacion de la película
 * @return [integer]calificacion de la película
 */
public function getCalificacion(){
  return $this->calificacion;
}
/**
 * Metodo para modificar la calificacion de la película
 * @param [integer] calificacion de la película
 *
 */
public function setCalificacion($calificacion){
  $this->calificacion=$calificacion;
  return $this;
}

/**
 * Metodo para obtener la fecha de publiacion
 * @return [Date]fecha de publiacion
 */
public function getFecha(){
  return $this->fecha;
}

/**
 * Metodo para modificar la calificacion de la película
 * @param [Date] calificacion de la película
 *
 */
public function setFecha($fecha){
  $this->fecha=$fecha;
  return $this;
}

}

?>
