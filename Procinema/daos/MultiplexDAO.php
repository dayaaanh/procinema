<?php

		/**
     * Se incluye el archivo Multiplex.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Multiplex.php');



  /**
     * Representa el DAO de la clase Multiplex
     */
    class MultiplexDAO {
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
		 * Constructor de un nuevo DAO de multiplex
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea una nuevo multiplex dentro de la base de datos
         *
         * @param Multiplex $nuevoMultiplex
         */
        public function crearMultiplex($nuevoMultiplex) {
            $sql = "INSERT INTO MULTIPLEX VALUES (0,'".$nuevoMultiplex->getNom_multiplex()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un multiplex  de la base de datos a partir de su código
         *
         * @param int $cod_multiplex
         * @return Multiplex multiplex
         */
        public function consultarMultiplex($cod_multiplex) {
            $sql = "SELECT * FROM MULTIPLEX WHERE cod_multiplex = $cod_multiplex";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$row = mysqli_fetch_array($result);

            $multiplex= new Multiplex($row[0], $row[1]);
			return $multiplex;
        }

        /**
         * Obtiene el multiplex de la base de datos
         *
         * @return Multiplex[] multiplex
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM MULTIPLEX";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$multiplexes= array();
			while ($row = mysqli_fetch_array($result)) {
				$multiplexes[] = new Multiplex($row[0], $row[1]);
			}
			return $multiplexes;
        }

        /**
         * Obtiene un multiplex de la base de datos a partir de su código
         *
         * @param String $nom_mutliplex
         * @return Multiplex multiplex
         */
        public function obtenerT_MultiplexDAO($nom_mutliplex) {
            $sql = "SELECT * FROM Multiplex WHERE nom_mutliplex = $nom_mutliplex";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }

						$row = mysqli_fetch_array($result);
            $multiplex = new Multiplex($row[0], $row[1]);
			return $multiplex;
        }

       /**
         * Modifica un multiplex en la base de datos
         * @param  Multiplex  $multiplexMod
         */
        public function modificarMultiplex($multiplexMod) {
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE MULTIPLEX SET nom_mutliplex = '".$multiplexMod->getNom_multiplex()."'
               WHERE cod_multiplex = ".$multiplexMod->getCod_multiplex();

          mysqli_query($this->con, $sql);
        }
			}

?>
