<?php
	// ligando a base de dados
		$ligacao = mysql_connect('localhost', 'root', '') or die ('não foi possivel ligar a base de dados');
		//selecionar a bd pretendida
		mysql_select_db('gestao_usuarios', $ligacao) or (mysql_error($ligacao));
?>