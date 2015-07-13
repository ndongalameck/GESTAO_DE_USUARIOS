<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eliminar usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/eliminar_usuario.css">
</head>
<body>
	<?php
		include('conexao.php');
		//criar a consulta a base dados
		$sql = "SELECT * FROM usuarios ORDER BY id_usuario ASC";
		//executar a consulta e guardar dados numa variavel 
		$consulta = mysql_query($sql);
		//verificar se existem dados e mostrá-los
		include ('menu.php');
		if($consulta){
			echo ("<table>"); 
				echo ("<tr> <th>Nº de cadastro</th> <th>nome do usuario</th> <th>E-mail do usuario</th> </tr>");
				//percorrer o array
				while($mostrar = mysql_fetch_array($consulta)){
					$id_usuario = $mostrar["id_usuario"];
					$nome_usuario = $mostrar["nome_usuario"];
					$email = $mostrar["email"];
					//apresentar o link para cada registo
					echo ("<tr><td> <a href=\"processar_eliminar.php?id_usuario=$id_usuario&nome_usuario=$nome_usuario&email=$email\">$id_usuario</a></td><td>$nome_usuario</td><td>$email</td>");	
				}
			echo ("</table>");
				}//caso n existem registos, informam ao utilizador
				else{
					echo "A base de dados n contêm registos";
				}
				//libertar a variavel da memoria
				mysql_free_result($consulta);	 
	?>
</body>
</html>