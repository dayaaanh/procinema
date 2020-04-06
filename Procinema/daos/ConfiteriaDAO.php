<?php


	/**
     * Se incluye el archivo Confiteria.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Confiteria.php');


    /**
     * Representa el DAO de la clase Confiteria
     */
    class ConfiteriaDAO {

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
		 * Constructor de un nuevo DAO de poducto
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea un nuevo producto dentro de la base de datos
         *
         * @param Producto $nuevoProducto
         */
        public function crearConfiteria($nuevoProducto) {
            $sql = "INSERT INTO CONFITERIA VALUES (0,'".$nuevoProducto->getNom_confiteria()."','".$nuevoProducto->getDescripcion()."','".$nuevoProducto->getcantidad()."')";
            mysqli_query($this->con, $sql);
      }

        /**
         * Obtiene un producto de la base de datos a partir de su código
         *
         * @param int $cod_confiteria
         * @return Confiteria confiteria
       */
        public function consultarConfiteria($cod_confiteria) {
            $sql = "SELECT * FROM CONFITERIA WHERE cod_confiteria = $cod_confiteria";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$row = mysqli_fetch_array($result);

            $confiteria = new Confiteria($row[0], $row[1],$row[2],$row[3]);
			return $confiteria;
        }

        /**
         * Obtiene las confiteria de la base de datos
         *
       * @return Confiteria[] confiterias
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM CONFITERIA";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$confiterias = array();
			while ($row = mysqli_fetch_array($result)) {
				$confiterias[] = new Confiteria($row[0], $row[1],$row[2],$row[3]);
			}
			return $confiterias;
        }

      /**
         * Obtiene una confiteria de la base de datos a partir de su código
         *
         * @param String $nom_confiteria
         * @return Confiteria confiteria
         */
        public function obtenerConfiteriaDAO($nom_confiteria) {
            $sql = "SELECT * FROM CONFITERIA WHERE nom_confiteria = $nom_confiteria";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }

		$row = mysqli_fetch_array($result);

            $confiteria = new Confiteria($row[0], $row[1],$row[2],$row[3]);
			return $confiteria;
        }

       /**
         * Modifica a un producto en la base de datos
       * @param  Producto  $productoMod
         */
        public function modificarConfiteria($productoMod) {
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE CONFITERIA SET nom_confiteria = '".$productoMod->getNom_confiteria()."', descripcion = '".$productoMod->getDescripcion().
                  "', cantidad = ".$productoMod->getcantidad().
                    " WHERE cod_confiteria= ".$productoMod->getCod_confiteria();

          mysqli_query($this->con, $sql);
        }

    }

?>
