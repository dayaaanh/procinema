<?php

	/**
     * Se incluye el archivo F_Pago.php
    */
		require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/F_Pago.php');


    /**
     * Representa el DAO de la clase F_Pago
     */
    class F_PagoDAO {
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
		 * Constructor de un nuevo DAO de t_pago
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

        /**
         * Crea una nuevo f_pago dentro de la base de datos
         *
         * @param F_Pago $nuevoT_Pago
         */
        public function crearPago($nuevaT_Pago) {
            $sql = "INSERT INTO F_PAGO VALUES (0,'".$nuevaSala->getNom_f_pago()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un f_pago  de la base de datos a partir de su código
         *
         * @param int $cod_f_pago
         * @return F_Pago f_pago
         */
        public function consultarPago($cod_f_pago) {
            $sql = "SELECT * FROM F_PAGO WHERE cod_f_pago = $cod_f_pago";

						if(!$result = mysqli_query($this->con, $sql)) die();
						$row = mysqli_fetch_array($result);

            $t_pago= new F_Pago($row[0], $row[1]);
			return $t_pago;
        }

        /**
         * Obtiene el f_pago de la base de datos
         *
         * @return F_Pago[] t_pagos
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM F_PAGO";

            if(!$result = mysqli_query($this->con, $sql)) die();
			$t_pagos= array();
			while ($row = mysqli_fetch_array($result)) {
				$t_pagos[] = new F_Pago($row[0], $row[1]);
			}
			return $t_pagos;
        }

        /**
         * Obtiene un t_pago de la base de datos a partir de su código
         *
         * @param String $nom_f_pago
         * @return F_pago f_pago
         */
        public function obtenerT_PagoDAO($nom_t_pago) {
            $sql = "SELECT * FROM T_PAGO WHERE nom_f_pago = $nom_f_pago";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }

			$row = mysqli_fetch_array($result);
            $t_pago = new F_Pago($row[0], $row[1]);
			return $t_pago;
      }

         /**
         * Modifica un tipo de pago en la base de datos
         * @param  F_Pago  $tpagoMod
         */
        public function modificarTPago($tpagoMod) {
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE F_PAGO SET nom_t_pago = '".$tpagoMod->getNom_f_pago()."'
               WHERE cod_t_pago = ".$tpagoMod->getCod_f_pago();
          mysqli_query($this->con, $sql);
        }
    }
?>
