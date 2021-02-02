<?php

	require "connect.php";

	//script para cadastrar novas Noticias

	$tit =  mysqli_real_escape_string ($conn, $_POST['titulo']);
	$cat =  mysqli_real_escape_string ($conn, $_POST['categoria']);
	$cont =  mysqli_real_escape_string ($conn, $_POST['conteudo']);


	$query = "INSERT INTO `noticias` (titulo, categoria, noticia) VALUES ('$tit', '$cat', '$cont')";


	$execute = mysqli_query ($conn, $query);

	$close = DBClose ($conn);

	if ($execute) {
		header("Location: ../index.php");
	}

 ?>