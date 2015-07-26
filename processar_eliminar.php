<!DOCTYPE html>
<html lang="en">
<head>
	<title>confirmação de eliminação de usuários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		if(isset($_POST['id_usuario'])) {
			include('conexao.php');
			$id_usuario = $_POST['id_usuario'];
			//criar a consulta
			$sql = "DELETE FROM usuarios WHERE id_usuario =".$id_usuario;
			$consulta = mysql_query($sql);
			echo "Eliminado com sucesso !!! ";
			echo "<a href= eliminar_usuario.php > Clique para continuar </a>";
		}else {
			include('menu.php');
		}
	?>

	<table class="table">
		<tr><th>Dados do usuário a eliminar</th>
		<?php
			$id_usuario = $_GET["id_usuario"];
			$nome_usuario = $_GET["nome_usuario"];
			$email = $_GET["email"];
		?> 
			<tr><td>Nº de usuário: <?php echo $id_usuario; ?></td></tr>
			<tr><td>Nome do usuário: <?php echo $nome_usuario; ?></td></tr>
			<tr><td>Email: <?php echo $email; ?></td></tr>
		</tr>
		<tr>
			<td>
				<form class="" action="processar_eliminar.php" method="POST">Tem certeza de que pretendo apagar este registo?
					<input name="apagar" type="submit" value="sim">
					<input name="id_usuario" type="hidden" value="<?php echo $id_usuario ?>">
				</form>
			</td>
		</tr>
	</table>
</body>
</html>




