<?php

	/**
   * Se incluye el archivo T_Silla.php
  */
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/T_Silla.php');


  /**
 	* Representa el DAO de la clase T_Silla
 */
    class T_SillaDAO {

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
		 * Constructor de un nuevo DAO de t_silla
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

      //----------------------------------------------------------------
      //Métodos
      //----------------------------------------------------------------
      /**
       * Crea un nuevo tipo de silla  dentro de la base de datos
       *
       * @param T_Silla $nuevoT_Silla
       */
        public function crearTSilla($nuevoT_Silla) {
            $sql = "INSERT INTO T_SILLA VALUES (0,'".$nuevoT_Silla->getNom_t_silla()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un t_silla  de la base de datos a partir de su código
         *
         * @param int $cod_t_silla
         * @return T_Silla t_silla
         */
        public function consultarTSilla($cod_t_silla) {
            $sql = "SELECT * FROM T_SILLA WHERE cod_t_silla = $cod_t_silla";
            if(!$result = mysqli_query($this->con, $sql)) die();
						$row = mysqli_fetch_array($result);
            $t_silla= new T_Silla($row[0], $row[1]);
			return $t_silla;
      }
        /**
         * Obtiene el t_silla de la base de datos
         *
         * @return T_Silla[] t_sillas
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM T_SILLA";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$t_sillas= array();
			while ($row = mysqli_fetch_array($result)) {
				$t_sillas[] = new T_Silla($row[0], $row[1]);
			}
			return $t_sillas;
        }

        /**
         * Obtiene un t_silla de la base de datos a partir de su código
         *
         * @param String $nom_t_silla
         * @return T_Silla t_silla
         */
        public function obtenerT_SillaDAO($nom_t_silla) {
            $sql = "SELECT * FROM T_SILLA WHERE nom_t_silla = $nom_t_silla";
          if(!$result = mysqli_query($this->con, $sql)) {
                return null;
        }
			$row = mysqli_fetch_array($result);
      $t_silla = new T_Silla($row[0], $row[1]);
		return $t_silla;

    }
         /**
         * Modifica un tipo de silla en la base de datos
         * @param  T_Silla  $tsillaMod
         */
        public function modificarTSilla($tsillaMod) {
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE T_SILLA SET nom_t_silla = '".$tsillaMod->getNom_t_silla()."'
               WHERE cod_t_silla = ".$tsillaMod->getCod_t_silla();
          mysqli_query($this->con, $sql);
        }
  }
?>
