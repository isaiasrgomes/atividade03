<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<title>Formulário</title>
</head>
<body>
	<form action="auth.php" method="POST">
		<label for="nome">Nome: </label>
		<input type="text" name="nome" id="nome" required/> <br />
		<label for="email">Email: </label>
		<input type="email" name="email" id="email" required/> <br />
		<label for="cpf">CPF: </label>
		<input type="number" name="cpf" id="cpf" required/> <br />
		<label for="senha">Senha: </label>
		<input type="password" name="senha" id="senha" required/> <br />
		<label for="confirmaSenha">Confirme sua senha: </label>
		<input type="password" name="confirmaSenha" id="confirmaSenha" required/>
		<br />
		<input type="submit" value="Enviar" />
	</form>
</body>
</html>