    <?php


	/**
     * Se incluye el archivo T_Usuario.php
    */
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/T_Usuario.php');

    /**
     * Representa el DAO de la clase T_Usuario
     */
    class T_UsuarioDAO {
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
		 * Constructor de un nuevo DAO de t_usuario
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}
        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------
        /**
         * Crea una nuevo t_usuario dentro de la base de datos
         *
         * @param T_Usuario $nuevoT_Usuario
       */
        public function crearUsuario($nuevoT_Usuario) {
            $sql = "INSERT INTO T_USUARIO VALUES (0,'".$nuevoT_Usuario->getNom_t_usuario()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un t_usuario  de la base de datos a partir de su código
         *
         * @param int $cod_t_usuario
         * @return T_Usuario t_usuario
         */
        public function consultarTUsuario($cod_t_usuario) {
            $sql = "SELECT * FROM T_USUARIO WHERE cod_t_usuario = $cod_t_usuario";
            if(!$result = mysqli_query($this->con, $sql)) die();
			         $row = mysqli_fetch_array($result);
               $t_usuario= new T_Usuario($row[0], $row[1]);
			return $t_usuario;
        }
      /**
       * Obtiene el t_pago de la base de datos
       *
       * @return T_Pago[] t_pagos
       */
        public function obtenerLista() {
          $sql = "SELECT * FROM T_USUARIO";
          if(!$result = mysqli_query($this->con, $sql)) die();
			           $t_usuarios= array();
			           while ($row = mysqli_fetch_array($result)) {
				$t_usuarios[] = new T_Usuario($row[0], $row[1]);
			}
			return $t_usuarios;
      }
        /**
         * Obtiene un t_usuario de la base de datos a partir de su código
         *
         * @param String $nom_t_usuario
         * @return T_pago t_pago
         */
        public function obtenerT_UsuarioDAO($nom_t_usuario) {
            $sql = "SELECT * FROM T_USUARIO WHERE nom_t_usuario = $nom_t_usuario";
            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }
			$row = mysqli_fetch_array($result);
      $t_usuario = new T_Usuario($row[0], $row[1]);
			return $t_usuario;
      }
         /**
         * Modifica un tipo de usuario en la base de datos
         * @param  T_Usuario  $usuarioMod
         */
        public function modificarTUsuario($tusuarioMod) {
            if((!$result = mysqli_query($this->con, $sql))) die();
                $row = mysqli_fetch_array($result);
                $sql = "UPDATE T_USUARIO SET nom_t_usuario = '".$tusuarioMod->getNom_t_usuario()."'
               WHERE cod_t_usuario= ".$tusuarioMod->getCod_t_usuario();
            mysqli_query($this->con, $sql);
        }
    }
?>
