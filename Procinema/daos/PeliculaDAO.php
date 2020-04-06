<?php

/**
 * Se incluye el archivo Pelicula.php
 */
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Pelicula.php');
/**
 * Se incluye el archivo T_Genero.php
 */
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/T_Genero.php');
/**
 * Se incluye el archivo Horario.php
 */
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Horario.php');
/**
 * Se incluye el archivo Idioma.php
 */
require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Idioma.php');

/** Se incluye el archivo T_GeneroDAO.php */
require_once('T_GeneroDAO.php');
/** Se incluye el archivo HorarioDAO.php */
require_once('HorarioDAO.php');
/** Se incluye el archivo IdiomaDAO.php */
require_once('IdiomaDAO.php');


/**
 * Representa el DAO de la clase Pelicula
 */
class PeliculaDAO
{

  //------------------------------------------------------------
  //Atributos
  //-------------------------------------------------------------
  /**
   * Representa la conexion a la base de datos
   *
   * @var Object
   */
  private $con;

  //---------------------------------------------------------------
  //Constructor
  //---------------------------------------------------------------
  /**
   * Constructor de un nuevo DAO de pelicula
   */
  public function __construct($con)
  {
    $this->con = $con;
    mysqli_set_charset($this->con, "utf8");
  }

  //----------------------------------------------------------------
  //Métodos
  //----------------------------------------------------------------

  /**
   * Crea una nueva pelicual dentro de la base de datos
   *
   * @param Pelicula $nuevaPelicula
   */
  public function crearPelicula($nuevaPelicula)
  {
    $sql = "INSERT INTO PELICULA VALUES (0,'" . $nuevaPelicula->getNom_pelicula() . "','" . $nuevaPelicula->getCod_genero() . "','" . $nuevaPelicula->getCod_idioma() . "','" . $nuevaPelicula->getCod_horario(). "','" . $nuevaPelicula->getDescripcion() . "','" . $nuevaPelicula->getCalificacion() . "','" . $nuevaPelicula->getFecha() . "','" . $nuevaPelicula->getDuracion() . "')";
    mysqli_query($this->con, $sql);
  }
  /**
   * Obtiene una pelicula  de la base de datos a partir de su código
   *
   * @param int $cod_pelicula
   * @return Pelicula pelicula
   */
  public function consultarPelicula($cod_pelicula)
  {
    $sql = "SELECT * FROM PELICULA WHERE cod_pelicula = $cod_pelicula";
    if (!$result = mysqli_query($this->con, $sql)) die();
    $row = mysqli_fetch_array($result);
    $tipoGeneroDAO = new T_GeneroDAO($this->con);
    $tipoGenero = $tipoGeneroDAO->consultarGenero($row[2]);
    $idiomaDAO = new IdiomaDAO($this->con);
    $idioma = $idiomaDAO->consultarIdioma($row[3]);
    $horarioDAO = new HorarioDAO($this->con);
    $horario = $horarioDAO->consultarHorario($row[4]);
    $pelicula = new Pelicula($row[0], $row[1], $tipoGenero, $idioma, $horario, $row[5], $row[6],  $row[7], $row[8]);
    return $pelicula;
  }
  /**
   * Obtien las pelicuals de la base de datos
   *
   * @return Pelicula[] peliculas
   */
  public function obtenerLista()
  {
    $sql = "SELECT * FROM PELICULA";
    if (!$result = mysqli_query($this->con, $sql)) die();
    $peliculas = array();
    while ($row = mysqli_fetch_array($result)) {
      $tipoGeneroDAO = new T_GeneroDAO($this->con);
      $tipoGenero = $tipoGeneroDAO->consultarGenero($row[2]);
      $idiomaDAO = new IdiomaDAO($this->con);
      $idioma = $idiomaDAO->consultarIdioma($row[3]);
      $horarioDAO = new HorarioDAO($this->con);
      $horario = $horarioDAO->consultarHorario($row[4]);
      $peliculas[] = new Pelicula($row[0], $row[1], $tipoGenero, $idioma, $horario, $row[5], $row[6],  $row[7], $row[8]);
    }
    return $peliculas;
  }

  /**
   * Obtiene una pelicula  de la base de datos a partir de su código
   *
   * @param String $nom_pelicula
   * @return Pelicula pelicula
   */
  public function obtenerPeliculaDAO($nom_pelicula)
  {
    $sql = "SELECT * FROM PELICULA WHERE nom_pelicula = $nom_pelicula";
    if (!$result = mysqli_query($this->con, $sql)) {
      return null;
    }
    $row = mysqli_fetch_array($result);
    $tipoGeneroDAO = new T_GeneroDAO($this->con);
    $tipoGenero = $tipoGeneroDAO->consultarGenero($row[2]);
    $idiomaDAO = new IdiomaDAO($this->con);
    $idioma = $idiomaDAO->consultarIdioma($row[3]);
    $horarioDAO = new HorarioDAO($this->con);
    $horario = $horarioDAO->consultarHorario($row[4]);
    $pelicula = new Pelicula($row[0], $row[1], $tipoGenero, $idioma, $row[4], $row[5], $horario, $row[7], $row[8]);
    return $pelicula;
  }
  /**
   * Modifica una pelicula  en la base de datos
   * @param  Pelicula $peliculaMod
   */
  public function modificarPelicula($peliculaMod)
  {   

     $sql = "UPDATE PELICULA SET nom_pelicula = '" . $peliculaMod->getNom_pelicula() . "', cod_genero='" . $peliculaMod->getCod_genero() . "', cod_idioma = '" . $peliculaMod->getCod_idioma() . "', cod_horario='" . $peliculaMod->getCod_horario() ."',descripcion='" . $peliculaMod->getDescripcion() . "',calificacion='" . $peliculaMod->getCalificacion() . "',fecha_publicacion='" . $peliculaMod->getFecha() . "',duracion='" . $peliculaMod->getDuracion() . "' WHERE cod_pelicula = '" . $peliculaMod->getCod_pelicula() ."'";
    
     mysqli_query($this->con, $sql);
  }
}
?>
