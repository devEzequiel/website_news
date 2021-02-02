<?php
session_start();
require_once "connect.php";

$id = mysqli_real_escape_string ($conn, $_POST['id']);



$query = "SELECT * FROM `noticias` WHERE id_news = '$id'";

$execute = mysqli_query ($conn, $query) or die (mysqli_error($conn));

$rows = mysqli_num_rows ($execute);

$array = mysqli_fetch_array ($execute, MYSQLI_ASSOC);

//

if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == 'sim') {
	$delete = '<button href="" id="deletar-noticia" onclick="deleteNew('.$array['id_news'].')">[deletar]</button>';
} else {
	$delete = '';
}

if ($rows>=1) {
	echo '<div class="container" id="newletter">
        	<div class="ct-box">
	            <h1 id="titulo_noticias">'.$array['titulo'].'</h1>
	            <h3 id="Categoria_noticias">'.$array['categoria'].'</h3>
	            <hr>
				<p id="texto_noticia">'.$array['noticia'].'</p>
				'.$delete.'
			</div>
   		 </div>';
}

?>