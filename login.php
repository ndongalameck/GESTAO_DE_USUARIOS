<!doctype html>
<html lang="en">
<head>
	<title>GESTÂO DE USUÁRIOS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/login.css">
	<script></script>
</head>
<body>
	<hgroup>
		<h1>SISTEMA DE GESTÃO DE USUÁRIOS</h1>
		<h3>LOGIN</h3>
	</hgroup>	
		<form name="myForm" action="processar_login.php" method="POST" id="contact_form" class="rounded">
			<div class="field">
				<label for="name">Name:</label>
				<input type="text" class="input" name="name" required>
				<p class="hint">Enter your name.</p>
			</div>
			<div class="field">
				<label for="email">Password:</label>
				<input type="password" class="input" name="password" required>
				<p class="hint">Enter your password:</p>
			</div>
			<input type="submit" name="submit" class="button" value="entrar">
			<input type="reset" name="delete" class="button"value="apagar">
		</form>

</body>
</html>