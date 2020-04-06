<?php


	 require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/entidades/Usuario.php');



    /** Se incluye el archivo T_UsuarioDAO.php */
    require_once('T_UsuarioDAO.php');
      /** Se incluye el archivo MultiplexDAO.php */
    require_once('MultiplexDAO.php');

    /**
     * Representa el DAO de la clase Usuario
     */
    class UsuarioDAO {
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
		 * Constructor de un nuevo DAO de usuario
		 */
		public function __construct($con) {
			$this->con = $con;
			mysqli_set_charset($this->con, "utf8");
		}
        //----------------------------------------------------------------
        //Métodos
        //----------------------------------------------------------------
        /**
         * Crea un nuevo Usuario dentro de la base de datos
         *
         * @param Usuario $nuevoUsuario
         */
        public function crearUsuario($nuevoUsuario) {
            $sql = "INSERT INTO USUARIO VALUES ('".$nuevoUsuario->getCod_usuario()."','".$nuevoUsuario->getNom_usuario()."',".$nuevoUsuario->getCod_t_usuario().",".$nuevoUsuario->getSalario().",'".$nuevoUsuario->getFecha_Contrato()."',".$nuevoUsuario->getCod_Multiplex().",'".$nuevoUsuario->getPassword()."','" .$nuevoUsuario->getCorreo()."')";
            mysqli_query($this->con, $sql);
        }

        /**
         * Obtiene un usuario de la base de datos a partir de su código
         *
         * @param int $cod_usuario
         * @return Usuario usuario
         */
        public function consultarUsuario($cod_usuario) {
            $sql = "SELECT * FROM USUARIO WHERE cod_usuario = $cod_usuario";
            if(!$result = mysqli_query($this->con, $sql)) die();
			$row = mysqli_fetch_array($result);

            $usuario = new Usuario($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
			return $usuario;
        }

        /**
         * Obtiene los usuarios de la base de datos
         *
         * @return Usuario[] usuarios
         */
        public function obtenerLista() {
            $sql = "SELECT * FROM USUARIO";
            if(!$result = mysqli_query($this->con, $sql)) die();
			$usuarios = array();
			while ($row = mysqli_fetch_array($result)) {

				$usuarios[] = new Usuario($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
			}
			return $usuarios;
	 }

        /**
         * Obtiene un usuario de la base de datos a partir de su código
         *
         * @param String $nom_usuario
         * @return Usuario usuario
         */
        public function obtenerUsuarioCorreo($correo_usuario) {
            $sql = "SELECT * FROM USUARIO WHERE correo_usuario= '".$correo_usuario."';";

            if(!$result = mysqli_query($this->con, $sql)) {
                return null;
            }
						$row = mysqli_fetch_array($result);

            $usuario = new Usuario($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
			return $usuario;
        }

      /**
         * Modifica a un usuario en la base de datos
         * @param  Usuario $usuarioMod
         */
        public function modificarUsuario($usuarioMod) {
					$sql = "UPDATE USUARIO SET nom_usuario = '".$usuarioMod->getNom_usuario()."', cod_t_usuario = ".$usuarioMod->getCod_t_usuario().", salario=".$usuarioMod->getSalario().", fecha_contrato='".$usuarioMod->getFecha_Contrato()."', cod_multiplex=".$usuarioMod->getCod_Multiplex().", contraseña='".$usuarioMod->getPassword()."', correo_usuario='".$usuarioMod->getCorreo()."' WHERE cod_usuario = ".$usuarioMod->getCod_usuario();
                mysqli_query($this->con, $sql);
      }
    }
?>
