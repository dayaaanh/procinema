<?php

		/**
 		* Se incluye el archivo AsignacionPSA.php
  	*/
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/AsignacionPSA.php');

    /**
    * Se incluye el archivo Multiplex.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Multiplex.php');

    /**
    * Se incluye el archivo Sala.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Sala.php');

    /**
    * Se incluye el archivo Sala.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Asiento.php');


    /** Se incluye el archivo PeliculaDAO.php */
    require_once('PeliculaDAO.php');
     /** Se incluye el archivo SalaDAO.php */
    require_once('SalaDAO.php');
    /** Se incluye el archivo AsientoDAO.php */
    require_once('AsientoDAO.php');
    /**
     * Representa el DAO de la clase AsignacionPSA
     */

    class AsignacionPSADAO {

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
		 * Constructor de un nuevo DAO de AsignacionPSA
		 */

		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------
        /**
         * Crea una nueva asignacion pelicula-sala-asiento dentro de la base de datos
         *
         * @param AsignacionPSA $nuevaAsignacion
         */
        public function crearAsignacionPSA($nuevaAsignacion) {
            $sql = "INSERT INTO ASIG_PEL_SAL_AS VALUES ('".$nuevaAsignacion->getCod_Pelicula()->getCod_pelicula()."','".$nuevaAsignacion->getCod_sala()->getCod_sala()."','".$nuevaAsignacion->getCod_Asiento()->getCod_Asiento()."')";
            mysqli_query($this->con, $sql);
        }
        public function obtenerLista() {
            $sql = "SELECT * FROM ASIG_PEL_SAL_AS";
            if(!$result = mysqli_query($this->con, $sql)) die();

			$asignaciones = array();
			while ($row = mysqli_fetch_array($result)) {
                $peliculaDAO= new PeliculaDAO($this->con);
                $pelicula=$peliculaDAO->consultarPelicula($row[0])
                $salaDAO= new SalaDAO($this->con);
                $sala=$salaDAO->consultarSala($row[1])
                $asientoDAO= new AsientoDAO($this->con);
                $asiento=$asientoDAO->consultarAsiento($row[2])
				$asignaciones[] = new AsignacionPSA($pelicula, $sala,$asiento);
			}
			return $asignaciones;
        }
  }

?>
