<?php


	/**
     * Se incluye el archivo AsignacionSM.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/AisgnacionSM.php');

    /**
     * Se incluye el archivo Multiplex.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Multiplex.php');

    /**
     * Se incluye el archivo Sala.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Sala.php');



    /** Se incluye el archivo MutiplexDAO.php */
    require_once('MultiplexDAO.php');
     /** Se incluye el archivo SalaDAO.php */
    require_once('SalaDAO.php');

  /**
     * Representa el DAO de la clase AsignacionSM
     */
    class AsignacionSMDAO {
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
		 * Constructor de un nuevo DAO de idioma
		 */
		public function __construct($con) {

		$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea una nueva asignacion sala pelicula dentro de la base de datos
         *
         * @param AsignacionSM $nuevaAsignacion
         */
        public function crearAsignacionSM($nuevaAsignacion) {
            $sql = "INSERT INTO ASIG_SAL_MUL VALUES ('".$nuevaAsignacion->getCod_multiplex()->getCod_multiplex()."','".$nuevaAsignacion->getCod_sala()->getCod_sala()."')";
            mysqli_query($this->con, $sql);
        }

        public function obtenerLista() {
            $sql = "SELECT * FROM ASIG_SAL_MUL";
          if(!$result = mysqli_query($this->con, $sql)) die();
					$asignaciones = array();
			while ($row = mysqli_fetch_array($result)) {
                $multiplexDAO= new MultiplexDAO($this->con);
                $multiplex=$multiplexDAO->consultarMultiplex($row[0])
              	$salaDAO= new SalaDAO($this->con);
                $sala=$salaDAO->consultarSala($row[1])
								$asignaciones[] = new AsignacionSMDAO($multiplex, $sala);
			}
			return $asignaciones;
        }
    }
?>
