<?php

header('Content-type: application/json');

require_once "connect.php";

$value = mysqli_real_escape_string ($conn, $_POST['value']);

$query = "SELECT * FROM `noticias` WHERE (titulo LIKE '%$value%' OR noticia LIKE '%$value%')";

$execute = mysqli_query ($conn, $query) or die(mysqli_error($conn));

$rows = mysqli_num_rows ($execute);

$array = mysqli_fetch_all ($execute, MYSQLI_ASSOC);

if ($rows >= 1){
	$news = array ();
	foreach ($array as $key => $index ) {
		$news [] = $index;
 	}
 	echo json_encode($news);
} 
else {
	$news  = array('1' => "Nenhuma noticia foi encontrada" );
	echo json_encode($news);
}
?>