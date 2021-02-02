<?php

    require_once "database/connect.php";


    $query = "SELECT * FROM `noticias`";
    $exe = mysqli_query ($conn, $query);
    $value = mysqli_fetch_all($exe, MYSQLI_ASSOC);
    $b= count($value);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="stylesheet" href="css/stylenoticias.css">  
    <link rel="stylesheet" href="css/footer.css"> 
    <title>Noticias</title>
</head>
<body id="body">
    <!--barra de navegação-->
    <?php include_once "elements/navHome.php"?>

    <br>
    <div  id ="div-summir" class="container-fluid" >
        <div class="row hide3" id="div-sumir2">

                <div class="col-lg-3 hide2" id="conteudo"><!--Conteudo do site-->      
                    
                </div>

        </div>
    </div>

    <!-- rodapé-->
    <?php include_once "elements/footer.html"?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/displayNews.js"></script>
    <script type="text/javascript" src="js/acessNew.js"></script>
    <script type="text/javascript" src="js/deleteNew.js"></script>
</body>

</html>