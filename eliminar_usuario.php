<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eliminar usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/eliminar_usuario.css">
</head>
<body>
	<?php
		//ligar a base de dados
		$ligacao = mysql_connect('localhost', 'root', '123root') or die ("não foi possivel ligar à base de dados");
		//ativar a base de dados
		mysql_select_db('gestao_usuarios', $ligacao) or die (mysql_error($ligacao));
		//criar a consulta a base dados
		$sql = "SELECT * FROM usuarios ORDER BY id_usuario ASC";
		//executar a consulta e guardar dados numa variavel 
		$consulta = mysql_query($sql);
		//verificar se existem dados e mostrá-los
		if($consulta){
			include ('menu.php');
			echo ("<table>"); 
				echo ("<tr> <th>Nº de cadastro</th> <th>nome do usuario</th> <th>E-mail do usuario</th> </tr>");
				//percorrer o array
				$mostrar="";
				while($mostrar = mysql_fetch_array($consulta)){
					$id_usuario = $mostrar["id_usuario"];
					$nome_usuario = $mostrar["nome_usuario"];
					$email = $mostrar["email"];
					//apresentar o link para cada registo
					echo ("<tr><td> <a href=\"processar_eliminar.php?id_usuario=$id_usuario&nome_usuario=$nome_usuario&email=$email\">$id_usuario</a></td> <td>$nome_usuario</td> <td>$email</td> </tr>");
			echo ("</table>");
				}
				}//caso n existem registos, informam ao utilizador
				else{
					echo "A base de dados n contêm registos";
				}
			
				//libertar a variavel da memoria
				mysql_free_result($consulta);	 
	?>
</body>
</html>