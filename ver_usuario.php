<?php
	//ligar a base de dados
	$ligacao = mysql_connect('localhost', 'root' '123root') or die('erro ao ligar a base de dados');
	//ativar a base de dados
	mysql_select_db('gestao_usuarios' $ligacao) or die (mysql_error($ligacao));
	//criar a consulta a base de dados
	$slq = "SELECT * FROM usuarios ORDER BY nome_usuario ASC";
	
?>