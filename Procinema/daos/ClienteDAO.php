<?php


	/**
 	* Se incluye el archivo Cliente.php
  */
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Cliente.php');



    /**
     * Representa el DAO de la clase Cliente
     */
    class ClienteDAO {
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
		 * Constructor de un nuevo DAO de cliente
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------

      /**
         * Crea un nuevo Cliente dentro de la base de datos
         *
         * @param Cliente $nuevoCliente
         */
        public function crearCliente($nuevoCliente) {
            $sql = "INSERT INTO CLIENTE VALUES (0,'".$nuevoCliente->getNom_cliente()."','".$nuevoCliente->getEmail()."',".$nuevoCliente->getPuntos().")";
						mysqli_query($this->con, $sql);
        }





        /**
         * Obtiene un cliente de la base de datos a partir de su código
         *
         * @param int $cod_cliente
         * @return Cliente cliente
         */
      public function consultarCliente($cod_cliente) {
            $sql = "SELECT * FROM CLIENTE WHERE cod_cliente = $cod_cliente";
					if(!$result = mysqli_query($this->con, $sql)) die();
						$row = mysqli_fetch_array($result);
            $cliente = new Cliente($row[0], $row[1],$row[2],$row[3]);
			return $cliente;
        }

        /**
         * Obtiene los clientes de la base de datos
         *
         * @return Cliente[] clientes
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM CLIENTE";
          if(!$result = mysqli_query($this->con, $sql)) die();
					$clientes = array();
					while ($row = mysqli_fetch_array($result)) {
						$clientes[] = new Cliente($row[0], $row[1],$row[2],$row[3]);
			}
			return $clientes;
        }


      /**
         * Obtiene un cliente de la base de datos a partir de su código
         *
         * @param String $nom_cliente
         * @return Cliente cliente
         */
        public function obtenerClienteDAO($nom_cliente) {

          $sql = "SELECT * FROM CLIENTE WHERE nom_cliente= $nom_cliente";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }



						$row = mysqli_fetch_array($result);

            $cliente = new Cliente($row[0], $row[1],$row[2],$row[3]);
			return $cliente;
        }

      /**
         * Modifica a un cliente en la base de datos
         * @param  Cliente  $clienteMod
         */
        public function modificarCliente($clienteMod) {

        $sql = "UPDATE CLIENTE SET nom_cliente = '".$clienteMod->getNom_cliente()."', correo_electronico = '".$clienteMod->getEmail()."', puntos = '".$clienteMod->getPuntos()."' WHERE cod_cliente = ".$clienteMod->getCod_cliente();

					mysqli_query($this->con, $sql);



        }
    }

?>
