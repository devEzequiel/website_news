
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Login</title>
</head>
<body>
    <!--barra de navegação-->
    <?php include_once "elements/nav.php"?>
    
    <div class="container">
        <div class="ct-box">
            <form method="post" action="database/validate.php">
                <img id="cimg" src="img/logo.png" alt="Um S">
                <p id="logo">LOGIN</p>
                <div>
                    <input type="text" name="nome" id="cnome" placeholder="username or email" required>
                </div>
                <div>
                    <input type="password" name="senha" id="csenha" placeholder="password" required>
                </div>
                <?php
                    if (isset($_GET['login']) && $_GET['login'] == 'error') {   
                ?>
                    <div style="color:white" align="center"> email ou senha inválido(s)</div>

                <?php 
                    }
                ?>


                <?php
                    if (isset($_GET['autenticado']) && $_GET['autenticado'] == 'nao') { 
                ?>
                    <div style="color:white" align="center">Faça o login e tenha acesso ao perfil administrativo.</div>

                <?php 
                    }
                ?>
                <div id="butoes">
                    <input type="submit" value="ACESSAR" id="cenvio" name="enviar">
                </div>
                <div id="direcoes">
                    <a id="left" href="index.php">Voltar</a>
                    <a id="right" href="cadastro-login.php">Cadastrar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
