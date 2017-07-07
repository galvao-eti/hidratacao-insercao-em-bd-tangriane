<?php
	namespace dao;
	use dao\Banco;
	use model\Produto as ProdutoModel;
	class Produto {
		
		public function cadastrar(ProdutoModel $produto){
			$sql = "INSERT INTO produto(nome, valor) VALUES (:nome, :valor)";
			$query = Banco::prepare($sql);
			$query->bindValue(":nome", $produto->getNome());
			$query->bindValue(":valor", (float)$produto->getValor());
			return $query->execute();
		}
	}
