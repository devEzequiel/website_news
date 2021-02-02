<?php
session_start();
require_once "connect.php";

$id = mysqli_real_escape_string ($conn, $_GET['id']);

$query = "DELETE FROM `noticias` WHERE id_news = '$id'";

$execute = mysqli_query ($conn, $query) or die (mysqli_error($conn));

if ($execute) {
	echo "Noticia apagada com sucesso";
} else {
	"Não foi possível apagar essa notícia";
}
?>