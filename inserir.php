<?php
	include("topo.php");

	$nome  = $_POST['nome'];
	$nome = mysql_real_escape_string($nome);
	$login = $_POST['login'];
	$login = mysql_real_escape_string($login);
	$email = $_POST['email'];
	$email = mysql_real_escape_string($email);
	$senha = $_POST['senha'];
	$senha = mysql_real_escape_string($senha);

	$sql = "INSERT INTO usuarios
			(nome, login, email, senha) 
			VALUES 
			('$nome', '$login', '$email', '$senha')";
	$gravou = mysql_query($sql);
	if($gravou == true){
		echo "Usuário cadastrado com sucesso.";
	} else {
		echo "Falha ao cadastrar usuário.";
	}
	include("rodape.php");
?>