<?php

		/**
 		* Se incluye el archivo Asiento.php
		*/
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Asiento.php');

    /**
     * Se incluye el archivo T_Silla.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/T_Silla.php');

    /** Se incluye el archivo T_SillaDAO.php */

    require_once('T_SillaDAO.php');
    /**
     * Representa el DAO de la clase Asiento
     */

    class AsientoDAO {
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
		 * Constructor de un nuevo DAO de asiento
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}
        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea un nuevo asiento dentro de la base de datos
         *
         * @param Asiento $nuevoAsiento
         */
        public function crearAsiento($nuevoAsiento) {
            $sql = "INSERT INTO ASIENTO VALUES (0,'".$nuevoAsiento->getCod_t_Asiento()->getCod_t_silla()."','".$nuevoAsiento->getDisponibilidad()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un asiento  de la base de datos a partir de su código
         *
         * @param int $cod_asiento
         * @return Asiento asiento
         */
        public function consultarAsiento($cod_asiento) {
            $sql = "SELECT * FROM ASIENTO WHERE cod_asiento = $cod_asiento";
        if(!$result = mysqli_query($this->con, $sql)) die();
						$row = mysqli_fetch_array($result);
            $tipoSillaDAO= new T_SillaDAO($this->con);
            $tipoSilla=$tipoSillaDAO->consultarTSilla($row[1]);
            $asiento= new Asiento($row[0], $tipoSilla,$row[2]);
			return $asiento;
        }

        /**
         * Obtiene el asiento de la base de datos
         *
         * @return Asiento[] asientos
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM ASIENTO";
            if(!$result = mysqli_query($this->con, $sql)) die();
			$asientos= array();
			while ($row = mysqli_fetch_array($result)) {
                 $tipoSillaDAO= new T_SillaDAO($this->con);
                 $tipoSilla=$tipoSillaDAO->consultarTSilla($row[1]);
				$asientos[] = new Asiento($row[0], $tipoSilla,$row[2]);
			}
			return $asientos;
    }
         /**
         * Modifica un asiento de pago en la base de datos
         * @param  Asiento $asientoMod
         */
        public function modificarAsiento($asientoMod) {
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE ASIENTO SET cod_t_silla = ".$asientoMod->getCod_t_Asiento()->getCod_t_silla().",disponibilidad=".$asientoMod->getDisponibilidad()."
                 WHERE cod_asiento = ".$asientoMod->getCod_Asiento();
            mysqli_query($this->con, $sql);
        }
    }
?>
