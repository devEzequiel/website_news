<?php

	include_once "../database/connect.php";
	session_start();


	$email = mysqli_real_escape_string ($conn, $_POST['nome']);
	$senha = mysqli_real_escape_string ($conn, $_POST['senha']);

	
	//Verifica se o usuário existe no banco de dados

	$query = "SELECT * FROM `users` WHERE  (email = '$email' OR user='$email') AND senha = '$senha'";
	$execute = mysqli_query ($conn, $query);
	$row = mysqli_num_rows ($execute);


	//recupera o id

	$id = mysqli_fetch_array ($execute, MYSQLI_ASSOC);

	//autenticação do usuário

	if ($row > 0){

		$_SESSION['autenticado'] = 'sim';
		$_SESSION['id'] = $id['id'];
		$_SESSION['perfil'] = $id['perfil_id'];
		header("Location: ../index.php");

	} else {

		$_SESSION['autenticado'] = 'nao';
		header("Location: ../login.php?login=error");
		
	}



	$close = DBClose ($conn);
?>