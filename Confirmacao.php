<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			margin: 0;
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
			background-image: linear-gradient(to right, #8b008b, #000000);
			margin-bottom: 120px;
			border: none;
			position: absolute;
			left: 50%;
			padding: 15px;
			color: white;
			font-size: 15px;
			cursor: pointer;
			border-radius: 10px;
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
	<?php

	$con = mysqli_connect("localhost", "root", "", "Cadastro");

	if (mysqli_connect_errno())
	 {
		echo "Erro: " . mysqli_connect_error();
	}
	 else {

		$sql = "INSERT INTO Pessoa VALUES('null', '$_POST[nome]', '$_POST[sobrenome]', '$_POST[email]', '$_POST[cpf]', '$_POST[sexo]', '$_POST[user]', '$_POST[senha]')";

		if (mysqli_query($con, $sql)) 
		{
			echo "<h1>Cadastro realizado com sucesso!</h1>";
			echo "<img src='img/login.png'/>";
		
		}
		 else {
			echo "<h1>Erro ao realizar cadastro.</h1>";
		}

		mysqli_close($con);
	}

	?>
	<a href="Login.html">
		<butto class="botao" type="submit"> Fazer Login</button>
	</a>
</body>

</html>