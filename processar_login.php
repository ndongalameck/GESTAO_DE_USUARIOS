<?php
	
	//varificar se houve preenchimento dos campos das variaveis
	if( !empty($_POST) AND (empty($_POST['name']) OR empty($_POST['password']))) {
	header("Location: login.php");
	exit;
	}

	//ligar a base de dados
	$ligacao = mysql_connect('localhost', 'root' '123root' ) or die('não foi possivel ligar a base de dados');
	mysql_select_db('gestao_usuarios', $ligacao);

	//definir as variveis username e password
	$username = $_POST["name"];
	$password = $_POST["password"];

	//consultar a base de dados
	$sql = "SELECT nome_usuario, palavra_passe FROM usuarios where nome_usuario='$username' AND palavra_passe='$password' ";
	$consulta = mysql_query($sql);

	//verificar se foram devolvidos dados
	if(mysql_num_rows($consulta)) {
		header("Location: menu.php");
		exit;
	}
	else{
		header("Location: login.php");
		exit;
	}
?>