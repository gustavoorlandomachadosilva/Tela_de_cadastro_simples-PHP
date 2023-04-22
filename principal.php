<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
</head>
<body>
	<h1>Cadastrar Usuário</h1>
	<!--chamando variável global-->
	<?php 
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
	 ?>
	<form method="POST" action="processa.php">
		<label>Nome: </label>
		<input type="Text" name="nome" placeholder="Digite seu nome">
		<label>Sobrenome: </label>
		<input type="Text" name="sobrenome" placeholder="Digite seu sobrenome"><br><br>
		<label>Idade: </label>
		<input type="Text" name="idade" placeholder="Digite sua idade"><br><br>
		<label>Email: </label>
		<input type="email" name="email" placeholder="Digite seu email"><br><br>
		<input type="submit" value="Cadastrar">

		
	</form>
</body>
</html>