<!doctype html>
<html lang="en">
<head>
	<title>REGISTAR USÁRIOS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/registar_usuario.css">
	<script></script>
</head>
<body>
	<?php include('menu.php') ?>
	<form id="contactform" class="rounded" method="POST" action="processar_registo.php">
		<h2>Formulário de cadastro</h3>
		<div class="field">
	    	<label for="name">Name:</label>
	    	<input type="text" class="input" name="name">*
	    	<p class="hint">Enter your name.</p>
		</div>
		<div class="field">
  			<label for="password">Password:</label>
    		<input type="password" name="password" class="input">*
    		<p class="hint">Enter your password</p>
		</div>
		<div class="field">
		    <label for="email">Email:</label>
		    <input type="text" class="input" name="email">*
		    <p class="hint">Enter your password.</p>
		</div>
		<input type="submit" name="Submit"  class="button" value="gravar" />
		<input type="reset" name="reset"  class="button" value="cancelar" />
	</form>
</body>
</html>