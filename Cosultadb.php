<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			background-image: linear-gradient(to right, #8b008b, #000000);
		}


		h1 {
			text-align: center;
			color: aliceblue;
			font-weight: 700;
			margin: 100;
		}

		a {
			width: 10%;
			padding: 16px 4px;
			border: none;
			border-radius: 8px;
			outline: none;
			text-transform: uppercase;
			font-weight: 800;
			letter-spacing: 3px;
			color: white;
			background-image: linear-gradient(to right, #8b008b, #000000);
			cursor: pointer;
			box-shadow: 0px 10px 40px -12px #f6f0f852;

		}

		img {
			display: block;
			width: 500px;
			margin-left: auto;
			margin-right: auto
		}
	</style>
</head>

<body>

	<a href="Index.html">
		<butto class="btn-login" type="submit"> Sair</button>
	</a>

	<?php

	$user = $_POST['user'];
	$senha = $_POST['senha'];


	$con = mysqli_connect("localhost", "root", "", "Cadastro");

	if (mysqli_connect_errno()) {
		echo "Erro: " . mysqli_connect_error();
	} else {

		$sql = "SELECT UserCliente, SenhaCliente FROM Pessoa";
		$resultado = mysqli_query($con, $sql);

		$pessoa = mysqli_fetch_array($resultado);

		if ($user == $pessoa['UserCliente'] && $senha == $pessoa['SenhaCliente']) {
			$_SESSION['nome'] = $user;
			echo "<h1>Bem-vindo ao sistema!!!</h1>";
			echo "<img src='img/amico.svg'/>";
		} else {
			echo "<h1>Usuário ou senha inválidos!!!</h1>";
			echo "<img src='img/Startled.png'/>";
		}


		mysqli_close($con);
	}

	?>

</body>

</html>