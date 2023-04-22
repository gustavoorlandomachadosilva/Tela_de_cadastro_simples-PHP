<?php 
	//criando sessão
	session_start();
	//incluindo neste código o conexao.php
	include_once("conexao.php"); 

	$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
	$sobrenome = filter_input(INPUT_POST, 'sobrenome',FILTER_SANITIZE_STRING);
	$idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);
	$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);

	//testando se tá guardando as informações
	$result_usuario = "INSERT INTO usuarios (nome, sobrenome, idade, email, created) 
	VALUES ('$nome', '$sobrenome', '$idade', '$email', NOW())";
	$resultado_usuario = mysqli_query($conn,$result_usuario);

	if (mysqli_insert_id($conn)) {
		//variável global
		$_SESSION['msg'] = "<p style = 'color: green;'>Usuario Cadastrado com sucesso</p>"; 
		header("Location: principal.php");
	}else{
		$_SESSION['msg'] = "<p style = 'color: red;'>Usuario não foi Cadastrado</p>"; 
		header("Location: principal.php");
	}
 ?>