<!DOCTYPE html>
<html>
<head>
	<title>processando dados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/processar_registo.css">
</head>
<body>
	<?php
		// verificar se os dados foram preenchidos
		if((!empty($_POST)) AND (empty($_POST['name'])) OR (empty($_POST['password']))  OR(empty($_POST['email']))) 
		{
			header("Location: registar_usuario.php");
			exit;
		}
		include('conexao.php');
		//artibuir as variaveis aos dados recolhidos do form
		$username = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		// criar instruçaõ para gravar os dados na tabela
		$sql = "INSERT INTO usuarios(nome_usuario, palavra_passe, email) VALUES ('$username', '$password', '$email')"; 
		$consulta = mysql_query($sql);
		echo "<h1>REGISTO DE USUÁRIOS</h1>";
		include('menu.php'); 
	?>
	<div id="box_message">
		<!--<script type="text/javascript">
			alert("cadastro efectuado com sucesso!!!");
			window.Location="registar_usuario.php";
		</script> -->
		<?php
			// mensagem de confirmação de gravação de dados
			echo "<h2>O cadastro foi efectuado com sucesso</h2>";
		?> 
	</div>
</body>
</html>
