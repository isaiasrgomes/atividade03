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
		 	echo "Cadastro realizado com sucesso!";
		 } else {
		 	echo "Erro ao cadastrar! Tente novamente";
		 }
}
?>