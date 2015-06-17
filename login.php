<!DOCTYPE html>
<html lang="en">
<head>
	<title>gestão de usuários</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/main_login.css">
	<script>
	</script>
</head>
<body>

	<div id="big_wrapper">
	<h1>LOGIN</h1>
	<form name="myForm" action="processar_login.php" method="POST" id="contact_form" class="rounded">
			<div class="field">
				<label for="name">Name:</label>
				<input type="text" class="input" name="name" id="name" required>
				<p class="hint">
					Enter your name.
				</p>
			</div>
			
			<div class="field">
				<label for="email">Email:</label>
					<input type="email" class="input" name="email" id="email" placeholder="name@email.com" required>
					<p class="hint">
						Enter your Email:
					</p>
					</div>

			<div class="field">
				<label for="phone">Password:</label> <!--formato angola-->																			<!--Phone Number Validation-->
					<input type="password" class="input" name="password" id="numero" required>
					<p class="hint">
						Enter your password:
					</p>
			</div>
			<input type="submit" name="submit" class="button" value="entrar">
			<input type="reset" name="delete" class="button"value="apagar">
		</form>
	</div>
</body>
</html>