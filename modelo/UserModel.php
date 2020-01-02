<?php 
	
	class UserModel{

		public $db;

		public function __construct(){
			require_once '../config/db.php';
			$this->db = $pdo;
		}

		public function crearUsuario($datos){
			$sql = "INSERT INTO users VALUES('{$datos[0]}','{$datos[1]}', '{$datos[2]}')";
			$result=$this->db->prepare($sql);
			$result->execute();
			return $result;
		}	
		public function buscarUsuarios(){
			$result = $this->db->prepare("SELECT * FROM users");
			$result->execute();
			return $result->fetchAll();
		}

	}
	

 ?>