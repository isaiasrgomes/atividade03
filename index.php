<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Formulário</title>
</head>
<body>
	<div id="container">
		<form action="auth.php" method="POST">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" placeholder="Samuel Silva" required/> <br />
			<label for="email">Email: </label>
			<input type="email" name="email" id="email" placeholder="example@mail.com" required/> <br />
			<label for="cpf">CPF: </label>
			<input type="number" name="cpf" id="cpf" placeholder="000.000.000-00" required/> <br />
			<label for="senha">Senha: </label>
			<input type="password" name="senha" id="senha" required/> <br />
			<label for="confirmaSenha">Confirme sua senha: </label>
			<input type="password" name="confirmaSenha" id="confirmaSenha" required/>
			<br />
			<input type="submit" value="Enviar" id="button" />
		</form>
</div>
	
</body>
</html>