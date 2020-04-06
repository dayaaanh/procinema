<?php

		

    /**
     * Se incluye el archivo Auditoria

    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Auditoria.php');
        
        require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/T_Usuario.php');
        require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Usuario.php');

   
    class AuditoriaDAO {
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
         * Obtiene la auditoria de la base de datos
         *
         * @return Asiento[] asientos
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM AUDITORIA";
            if(!$result = mysqli_query($this->con, $sql)) die();
			$asientos= array();
			while ($row = mysqli_fetch_array($result)) {
          
				$auditoria[] = new AUDITORIA($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
			}
			return $asientos;
    }
   
    }
?>
