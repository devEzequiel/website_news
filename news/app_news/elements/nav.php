<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="menu">
        <a class="navbar-brand" href="./" style="color:rgb(255,255,255);"><img id="imagem" style="" src="img/logo.png" alt="Um S">New the Tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color:rgb(255,255,255);">Home<span class="sr-only">(current)</span></a>
                </li>
                <?php
                    session_start();
                    if (isset($_SESSION['autenticado'])){
                        if ($_SESSION['autenticado'] == 'sim') {
                            
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar.php" style="color:rgb(255,255,255);">Cadastrar Noticia</a>
                </li>
                <?php
                        }
                    }

                    if (!isset($_SESSION['autenticado']) or $_SESSION['autenticado'] == 'nao'){
                        
                ?>

                <li class="nav-item">
                    <a class="nav-link disabled" href="login.php" style="color:rgb(255,255,255);">Login</a>
                </li>
                <?php
                        
                    }

                    if (isset($_SESSION['autenticado'])){
                        if ($_SESSION['autenticado'] == 'sim') {
                            
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./database/logout.php" style="color:rgb(255,255,255);">Sair</a>
                </li>
                <?php
                        }
                    }
                ?>
            </ul>
        </div>
    </nav>