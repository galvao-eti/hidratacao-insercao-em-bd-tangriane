<?php
	namespace dao;
	use dao\Banco;
	use model\Usuario as UsuarioDao;
	class Usuario {
	
		public function cadastrar(UsuarioDao $user){
			$sql = "INSERT INTO usuario(nome, senha) VALUES (:nome, :senha)";
			$query = Banco::prepare($sql);
			$query->bindValue(":nome", $user->getUsuario());
			$query->bindValue(":senha", $user->getSenha());
			return $query->execute();
		}
	}
