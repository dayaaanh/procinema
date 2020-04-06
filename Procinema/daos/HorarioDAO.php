<?php

	/**
  * Se incluye el archivo Horario.php
  */
	require_once('../entidades/Horario.php');



	  /**
     * Representa el DAO de la clase Horario
     */
    class HorarioDAO {

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
		 * Constructor de un nuevo DAO de horario
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea un nuevo horario dentro de la base de datos
         *
         * @param Horario $nuevoHorario
         */
        public function crearHorario($nuevoHorario) {
            $sql = "INSERT INTO HORARIO VALUES (0,'".$nuevoHorario->getNom_horario()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un horario de la base de datos a partir de su código
         *
         * @param int $cod_horario
         * @return Horario horario
         */
        public function consultarHorario($cod_horario) {
            $sql = "SELECT * FROM HORARIO WHERE cod_horario = $cod_horario";
            if(!$result = mysqli_query($this->con, $sql)) die();
			$row = mysqli_fetch_array($result);

            $horario = new Horario($row[0], $row[1]);
			return $horario;
        }
        /**
         * Obtiene los horarios de la base de datos
         *
         * @return Horario[] horarios
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM HORARIO";
            if(!$result = mysqli_query($this->con, $sql)) die();
						$horarios = array();
			while ($row = mysqli_fetch_array($result)) {
				$horarios[] = new horario($row[0], $row[1]);
			}
			return $horarios;
        }

        /**
       	* Obtiene un horario de la base de datos a partir de su código
         *
         * @param String $nom_horario
         * @return Horario horario
         */
        public function obtenerHorarioDAO($nom_horario) {
            $sql = "SELECT * FROM HORARIO WHERE nom_horario = $nom_horario";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }
						$row = mysqli_fetch_array($result);
            $horario = new Horario($row[0], $row[1]);
			return $horario;
        }

        /**
         * Modifica a un horario en la base de datos
         * @param  Horario $horarioMod
         */
        public function modificarHorario($horarioMod) {
            $sql = "UPDATE HORARIO SET nom_horario = '".$horarioMod->getNom_horario()."' WHERE cod_horario = ".$horarioMod->getCod_horario();
                if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);                
            mysqli_query($this->con, $sql);
        }
    }

