<?php

header('Content-type: application/json');

require_once "connect.php";

$query = "SELECT * FROM `noticias`";

$execute = mysqli_query ($conn, $query) or die(mysqli_error($conn));

$rows = mysqli_num_rows ($execute);

$array = mysqli_fetch_all ($execute, MYSQLI_ASSOC);

if ($rows >= 1){
	$news = array ();
	foreach ($array as $key => $index ) {
		$id [] = $index;
 	}
 	echo json_encode($id);
} else {
	echo json_encode("Nenhum resultado encontrado.");
}
?>