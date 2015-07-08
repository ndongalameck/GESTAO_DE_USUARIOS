<?php
	//varificar se houve preenchimento dos campos das variaveis
	if( !empty($_POST) AND (empty($_POST['name']) OR empty($_POST['password']))) {
		header("Location: login.php");
			exit;
	}
	include('conexao.php');
	//definir as variveis username e password
	$username = $_POST['name'];
	$password = $_POST['password'];
	//consultar a base de dados
	$sql = "SELECT nome_usuario, palavra_passe FROM usuarios where nome_usuario='$username' AND palavra_passe='$password' ";
	$consulta = mysql_query($sql);
	//verificar se foram devolvidos dados
	if(mysql_num_rows($consulta) == 1) {
		header("Location: menu.php");
			exit;
	}else{
		header("Location: login.php");
			exit;
	}
	mysql_free_result($consulta);
?>