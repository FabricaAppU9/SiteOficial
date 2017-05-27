<?php
	// teste
	session_start();
	class Login{

		public $login;
		public $senha;

		
		public function usuarioEstaLogado(){
			return isset($_SESSION["usuario_logado"]);
		}

		public function verificaUsuario(){
			if(!usuarioEstaLogado()){
				header("Location: login.php");
				die();
			}
		}

		public function usuarioLogado(){
			return $_SESSION["usuario_logado"];
		}

		public function logaUsuario($email,$id){
			$_SESSION["usuario_logado"] = $email;
			$_SESSION["id"] = $id;
		}

		public function logout(){
			session_destroy();
			session_start();
		}
	}