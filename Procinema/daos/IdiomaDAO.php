<?php


	/**
     * Se incluye el archivo Idioma.php
    */
		require_once('../entidades/Idioma.php');


    /**
     * Representa el DAO de la clase Idioma
     */
    class IdiomaDAO {
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
       * Crea un nuevo idioma dentro de la base de datos
       *
       * @param Idioma $nuevoIdioma
       */
      public function crearIdioma($nuevoIdioma) {
            $sql = "INSERT INTO IDIOMA VALUES (0,'".$nuevoIdioma->getNom_Idioma()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un idioma de la base de datos a partir de su código
         *
         * @param int $cod_idioma
         * @return Idioma idioma
         */
        public function consultarIdioma($cod_idioma) {
            $sql = "SELECT * FROM IDIOMA WHERE cod_idioma = $cod_idioma";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$row = mysqli_fetch_array($result);

            $idioma = new Idioma($row[0], $row[1]);
			return $idioma;
        }

        /**
         * Obtiene los idiomas de la base de datos
         *
         * @return Idioma[] idiomas
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM IDIOMA";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$idiomas = array();
			while ($row = mysqli_fetch_array($result)) {
				$idiomas[] = new Idioma($row[0], $row[1]);
			}
			return $idiomas;
        }

        /**
         * Obtiene un idioma de la base de datos a partir de su código
         *
         * @param String $nom_idioma
         * @return Idioma idioma
         */
        public function obtenerIdiomaDAO($nom_idioma) {
            $sql = "SELECT * FROM IDIOMA WHERE nom_idioma = $nom_idioma";
            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }
						$row = mysqli_fetch_array($result);
            $idioma= new Idioma($row[0], $row[1]);
			return $idioma;
        }
        /**
         * Modifica a un idioma en la base de datos
         * @param  Idioma $idiomaMod
         */
        public function modificarIdioma($idiomaMod) {
          $sql = "UPDATE IDIOMA SET nom_idioma = '".$idiomaMod->getNom_Idioma()."' WHERE cod_idioma = ".$idiomaMod->getCod_Idioma();
                if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                

          mysqli_query($this->con, $sql);
        }
  }
?>
