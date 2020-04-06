<?php

	/**
     * Se incluye el archivo Sala.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Sala.php');


    /**
   * Representa el DAO de la clase Sala
   */
    class SalaDAO {

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
		 * Constructor de un nuevo DAO de sala
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea una nueva sala dentro de la base de datos
         *
         * @param Sala $nuevaSala
         */
        public function crearSala($nuevaSala) {
            $sql = "INSERT INTO SALA VALUES (0,'".$nuevaSala->getNom_sala()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene una sala  de la base de datos a partir de su código
         *
         * @param int $cod_sala
         * @return Sala sala
         */
        public function consultarSala($cod_sala) {
            $sql = "SELECT * FROM SALA WHERE cod_sala = $cod_sala";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$row = mysqli_fetch_array($result);

            $sala= new Sala($row[0], $row[1]);
			return $sala;
        }

        /**
         * Obtiene la sala de la base de datos
         *
         * @return Sala[] salas
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM SALA";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$salas= array();
			while ($row = mysqli_fetch_array($result)) {
				$salas[] = new Sala($row[0], $row[1]);
			}
			return $salas;
        }

        /**
         * Obtiene una sala de la base de datos a partir de su código
         *
         * @param String $nom_sala
         * @return Sala sala
         */
        public function obtenerSalaDAO($nom_sala) {
            $sql = "SELECT * FROM SALA WHERE nom_sala = $nom_sala";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }
						$row = mysqli_fetch_array($result);
            $sala = new Sala($row[0], $row[1]);
			return $sala;
        }
         /**
         * Modifica una sala  en la base de datos
         * @param  Sala  $salaMod
         */
        public function modificarSala($salaMod) {

             $sql = "UPDATE SALA SET nom_sala = '".$salaMod->getNom_sala()."'
               WHERE cod_sala = ".$salaMod->getCod_sala();

             if((!$result = mysqli_query($this->con, $sql))) die();
               

        }
  }
?>
