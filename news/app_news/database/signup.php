<?php

	require_once "connect.php";

		$email = mysqli_real_escape_string ($conn, $_POST['nmail']);
		$user = mysqli_real_escape_string ($conn, $_POST['nuser']);
		$senha = mysqli_real_escape_string ($conn, $_POST['nsenha']);


	//verificar se o usuario ou email já está cadastrado
	$compare = mysqli_query ($conn, "SELECT * FROM `users` WHERE user = '$user' or email = '$email'");

	$row = mysqli_num_rows ($compare);

	if ($row > 0) {
		header("Location: ../cadastro-login.php?user=exist");
		exit();
	}

	//registrar usuario
	elseif ($senha == $_POST['nconfirm']) {

		$query = "INSERT INTO `users` (email, user, senha) VALUES ('{$email}', '{$user}', '{$senha}')";

		$execute = mysqli_query ($conn, $query);

		//testa se usuario foi criado e redireciona para pagina de login
		if ($execute) {
			header("Location: ../login.php?user=new");
		}
		else {
			echo "$user";
		}

	}

	$close = DBClose ($conn);

?>