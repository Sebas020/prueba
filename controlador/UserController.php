<?php 
	
	require_once '../modelo/UserModel.php';

	class UserController{

		public function consultar(){
			$user = new UserModel();
			$buscarUsuario= $user->buscarUsuarios();
			require_once '../vista/user/index.php';
		}

		public function crear(){
			$data = array($_POST['codigo'], $_POST['nombres'], $_POST['apellidos']);
			$user = new UserModel();
			$crearUsuario = $user->crearUsuario($data);
			if ($crearUsuario){
				echo "ingreso exitos";
			}else{
				echo "no funciona";
			}
		}

		public function eliminar(){

		}

		public function actualizar(){

		}
	}

	if(isset($_POST['function']) || isset($_GET['function'])){
		($_POST['function']) ? $funcion = $_POST['function'] : $funcion = $_GET['function'];
		var_dump($funcion);
		$user = new UserController;

		$user->$funcion();

	}

 ?>