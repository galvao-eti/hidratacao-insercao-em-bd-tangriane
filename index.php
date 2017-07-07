
<?php

	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	require('autoload.php');
	
	use dao\Banco;
	use model\Produto;
	use model\Usuario;
	use dao\Usuario as UsuarioDao;
	use dao\Produto as ProdutoDao;

	$usuario = new model\Usuario();
	$conteudo = array(
		"usuario" => "tangriane",
		"senha" => 321,
		
	);

	$usuario->traits($conteudo);
	
	$daoUsuario = new UsuarioDao;
	if($daoUsuario->cadastrar($usuario)){
		echo "<br>Usuarío cadastrado com sucesso.";
	}
		

	$produto = new model\Produto();

	$conteudo = array(
		"nome" => "Pirulito",
		"valor" => 17.01,
			);
	$produto->traits($conteudo);

	$daoProduto = new ProdutoDao;
		if($daoProduto->cadastrar($produto)){
		echo "<br>Produto cadastrado com sucesso.";
	}
	

?>
<p>Para enviar os dados pré-definidos, basta clinar no botão. </p>
<br>
<input type="button" value="Enviar dados" onClick="history.go(0)"> 