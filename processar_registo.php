<?php
	// verificar se os dados foram preenchidos
	if((!empty($_POST)) AND (empty($_POST['name'])) OR (empty($_POST['password']))  OR(empty($_POST['email']))) {
		header("Location: registar_usuario.php");
		exit;
	}
	// ligando a base de dados
	$ligacao = mysql_connect('localhost', 'root', '123root') or die ('não foi possivel ligar a base de dados');
	//selecionar a bd pretendida
	mysql_select_db('gestao_usuarios', $ligacao) or (mysql_error($ligacao));
	//artibuir as variaveis aos dados recolhidos do form
	$username = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	// criar instruçaõ para gravar os dados na tabela
	$sql = "INSERT INTO usuarios(nome_usuario, palavra_passe, email) VALUES ('$username', '$password', '$email')"; 
	$consulta = mysql_query($sql);
	// incluindo o menu geral 
	echo "<h1>REGISTO DE USUÁRIOS</h1>";
	include('menu.php'); 
	// mensagem de confirmação de gravação de erros
	echo "O cadastro foi efectuado com sucesso";
?>