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
		echo "Cadastro Realizado";
	}
?>