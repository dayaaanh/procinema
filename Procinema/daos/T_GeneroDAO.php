<?php

	/**
     * Se incluye el archivo T_Genero.php
    */
		require_once('../entidades/T_Genero.php');


  /**
   * Representa el DAO de la clase T_Genero
   */
    class T_GeneroDAO {

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
		 * Constructor de un nuevo DAO de t_genero
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea un nuevo t_genero  dentro de la base de datos
         *
         * @param T_Genero $nuevoGenero
         */
        public function crearGenero($nuevoGenero) {
            $sql = "INSERT INTO T_GENERO VALUES (0,'".$nuevoGenero->getNom_genero()."')";
            mysqli_query($this->con, $sql);
        }

        /**

       * Obtiene un genero de la base de datos a partir de su código
         *
         * @param int $cod_genero
         * @return T_Genero t_genero
         */
        public function consultarGenero($cod_genero) {
            $sql = "SELECT * FROM T_GENERO WHERE cod_genero = $cod_genero";

            if(!$result = mysqli_query($this->con, $sql)) die();
						$row = mysqli_fetch_array($result);
            $genero= new T_Genero($row[0], $row[1]);
			return $genero;
        }

      /**
         * Obtiene el genero de la base de datos
         *
         * @return T_Genero[] generos
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM T_GENERO";
          if(!$result = mysqli_query($this->con, $sql)) die();
						$generos= array();
						while ($row = mysqli_fetch_array($result)) {
							$generos[] = new T_Genero($row[0], $row[1]);
						}
						return $generos;
        }
        /**
         * Obtiene un genero de la base de datos a partir de su código
       	 *
         * @param String $nom_genero
         * @return T_Genero t_genero
         */
        public function obtenerGeneroDAO($nom_genero) {
            $sql = "SELECT * FROM T_GENERO WHERE nom_genero = $nom_genero";
            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
          }
					$row = mysqli_fetch_array($result);
            $genero = new T_Genero($row[0], $row[1]);
						return $genero;
        }
       /**
         * Modifica un genero en la base de datos
         * @param  T_Genero  $generoMod
         */
        public function modificarGenero($generoMod) {
          $sql = "UPDATE T_GENERO SET nom_genero = '".$generoMod->getNom_genero()."'
                     WHERE cod_genero = ".$generoMod->getCod_genero();
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);                
          mysqli_query($this->con, $sql);
        }
  }
?>
