<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastrar Login</title>
    <link rel="stylesheet" href="css/style-cd-login.css">
    <link rel="stylesheet" href="css/stylemenu.css">
</head>
<body>
    <!--barra de navegação-->
    <?php include_once "elements/nav.php"?>
    
    <div class="container">
        <div class="box">
            <h2 id="titulo-form">Criar Conta</h2>
            <form action="database/signup.php" id="formulario" method="POST">
                <div id="div-mail">
                    <label for="dmail"></label>
                    <input type="email" name="nmail" id="dmail" placeholder="Email">
                </div>
                <div id="div-user">
                    <label for="duser"></label>
                    <input type="name" name="nuser" id="duser" placeholder="Username">
                </div>
                <div id="div-senha">
                    <label for="dsenha"></label>
                    <input type="password" name="nsenha" id="dsenha" placeholder="Senha">
                </div>
                <div id="div-confirm">
                    <label for="dconfirm"></label>
                    <input type="password" name="nconfirm" id="dconfirm" placeholder="Confirmar Senha">
                </div>
                <?php 
                    if (isset($_GET['user']) && $_GET['user']=='exist') {
                ?>
                <span id ="txt_erro">O usuário ou email já está cadastrado</span>

                <?php       
                    }
                ?>
                <div id="div-enviar">
                    <input type="submit" name="nbutao" value="Cadastre-se" id="dbutao" style="color: white;">
                </div><br><br>
                <div id="div-botao">
                    <div id="div-esquerda"><a id="right" href="login.php" style="color:blue">Voltar</a></div>
                </div>
            </form>
        </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>