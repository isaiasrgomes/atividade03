<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="auth.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&display=swap" rel="stylesheet">
	<title>Autenticação</title>
</head>
<body>
	<main>
	<?php
if (
	isset($_POST['nome']) && !empty($_POST['nome']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['cpf']) && !empty($_POST['cpf']) &&
    isset($_POST['senha']) && !empty($_POST['senha']) &&
    isset($_POST['confirmaSenha']) && !empty($_POST['confirmaSenha'])
	) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];
		$senha = $_POST['senha'];
		$confirmaSenha = $_POST['confirmaSenha'];	
		$cad = true;
		if (strlen($nome) < 3){
			
			echo "O nome precisa conter no minimo 3 caracteres <br>";
			$cad = false;
	}
		if(!strstr($email, '@')){
			echo "@ não encontrado no campo Email <br>";
			$cad = false;
		}
		
		if (strlen($cpf) < 11 || strlen($cpf) > 11){
			echo "O CPF deve conter 11 digitos (somente números) <br>" ;
			$cad = false;
		}
		if(strlen($senha) < 6){
			echo "A senha deve conter no mínimo 6 caracteres <br>";
			$cad = false;
		}
		
		if($senha != $confirmaSenha){
			echo "As senhas são diferentes <br>";
			$cad = false;
			
		}
		 if($cad){
		 	echo "<div class='true'>Cadastro realizado com sucesso!</div>";
		 } else {
		 	echo "Erro ao cadastrar! Tente novamente.";
		 }
}
?>
	</main>

</body>
</html>