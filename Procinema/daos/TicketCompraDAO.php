<?php

	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/TicketCompra.php');

    /** Se incluye el archivo MutiplexDAO.php */
    require_once('MultiplexDAO.php');
     /** Se incluye el archivo SalaDAO.php */
    require_once('ClienteDAO.php');
   /** Se incluye el archivo F_pagoDAO.php */
    require_once('F_PagoDAO.php');
   /** Se incluye el archivo ConfiteriaDAO.php */
    require_once('ConfiteriaDAO.php');
     /** Se incluye el archivo UsarioDAO.php */
    require_once('UsuarioDAO.php');

    /**
     * Representa el DAO de la clase TicketCompra
     */
    class TicketCompraDAO {
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
		 * Constructor de un nuevo DAO de ticket compra
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}

      //----------------------------------------------------------------
      //Métodos
      //----------------------------------------------------------------
      /**
       * Crea un nuevo ticket compra dentro de la base de datos
       *
       * @param TicketCompra $nuevoTicket
       */
        public function crearTicketCompra($nuevoTicket) {
            $sql = "INSERT INTO TICKETCOMPRA VALUES (0,'".$nuevoTicket->getCod_Usuario()->getCod_usuario()."','".$nuevoTicket->getCod_Multiplex()->getCod_multiplex()."','".$nuevoTicket->getCod_f_pago()->getCod_f_pago()."','".$nuevoTicket->getCod_confiteria()->getCod_confiteria()."','".$nuevoTicket->getCod_cliente()->getCod_cliente()."','".$nuevoTicket->getFecha_compra()."','".$nuevoTicket->getEstado()."','".$nuevoTicket->getPrecio()."')";
            mysqli_query($this->con, $sql);
        }
        /**
         * Obtiene un ticketCompra de la base de datos a partir de su código
         *
         * @param int $cod_ticket
         * @return TicketCompra ticketcompra
       */
        public function consultarTicketCompra($cod_ticket) {
            $sql = "SELECT * FROM TICKETCOMPRA WHERE cod_ticket = $cod_ticket";
            if(!$result = mysqli_query($this->con, $sql)) die();
						$row = mysqli_fetch_array($result);
          	$usuarioDAO= new UsuarioDAO($this->con);
            $usuario=$usuarioDAO->consultarUsuario($row[1]);
            $multiplexDAO= new MultiplexDAO($this->con);
            $multiplex=$multiplexDAO->consultarMultiplex($row[2]);
            $f_pagoDAO= new F_PagoDAO($this->con);
            $f_pago=$f_pagoDAO->consultarPago($row[3]);
            $confiteriaDAO= new ConfiteriaDAO($this->con);
            $confiteria=$confiteriaDAO->consultarConfiteria($row[4]);
          	$clienteDAO= new ClienteDAO($this->con);
            $cliente=$clienteDAO->consultarCliente($row[5]);

            $ticket = new TicketCompra($row[0], $usuario,$multiplex,$f_pago,$confiteria,$cliente,$row[6],$row[7],$row[8]);
			return $ticket;
        }
        /**
         * Obtiene los tickets de la base de datos
         *
         * @return TicketCompra[] tickets
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM TICKETCOMPRA";
            if(!$result = mysqli_query($this->con, $sql)) die();
			$tickets= array();
			while ($row = mysqli_fetch_array($result)) {
                $usuarioDAO= new UsuarioDAO($this->con);
                $usuario=$usuarioDAO->consultarUsuario($row[1]);
                $multiplexDAO= new MultiplexDAO($this->con);
                $multiplex=$multiplexDAO->consultarMultiplex($row[2]);
                $f_pagoDAO= new F_PagoDAO($this->con);
                $f_pago=$f_pagoDAO->consultarPago($row[3]);
                $confiteriaDAO= new ConfiteriaDAO($this->con);
                $confiteria=$confiteriaDAO->consultarConfiteria($row[4]);
              	$clienteDAO= new ClienteDAO($this->con);
                $cliente=$clienteDAO->consultarCliente($row[5]);
                $ticket[] = new TicketCompra($row[0], $usuario,$multiplex,$f_pago,$confiteria,$cliente,$row[6],$row[7],$row[8]);
			}
			return $tickets;
        }
        /**
         * Modifica un ticket en la base de datos
         * @param  TicketCompra $ticketMod
         */
        public function modificarTicket($ticketMod) {
                if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE TICKETCOMPRA SET cod_usuario= ".$ticketMod->getCod_Usuario()->getCod_usuario().",cod_multiplex= ".$ticketMod->getCod_multiplex()->getCod_multiplex().",cod_f_pago= ".$ticketMod->getCod_f_pago()->getCod_f_pago().",cod_confiteria= ".$ticketMod->getCod_confiteria()->getCod_confiteria().",cod_cliente= ".$ticketMod->getCod_cliente()->getCod_cliente().",fecha_compra= ".$ticketMod->getFecha_compra().",estado=".$ticketcompra->getEstado().",precio=".$ticketcompra->getPrecio()." WHERE cod_ticket = ".$ticketMod->getCod_ticket();
            mysqli_query($this->con, $sql);
        }
  }

?>
