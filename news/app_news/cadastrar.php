<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/stylemenu.css">
    <title>Cadastro de Noticias</title>
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript">
        
        function deletar(){
            alert ('deseja apagar essa noticia??');
        }


    </script>
    <title>Cadastrar Noticia</title>
</head>
<body>
    <!--barra de navegação-->
    <?php include_once "elements/nav.php"?>

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-10">
            <form id = "formulario" method="POST" action="database/cad.php">
                <h3 id="tit-form">Cadastro de Noticias</h3>
                <input type="text" name="titulo" id="ctitulo" placeholder="Titulo da Noticia" required>
                <select name="categoria" id="cate">
                    <option value="Esportes">Esportes</option>
                <option value="Saúde">Saúde</option>
                <option value="Economia">Economia</option>
                <option value="Política">Política</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                </select>
                <textarea name="conteudo" id="cont" cols="30" rows="10" style="resize: none;" placeholder="Conteúdo da noticia" required></textarea>
                <input id="clic" type="submit" name="enviar">
                <a id="retorno" href="index.php">Voltar</a>
            </form>
        </div>
        </div>
    </div>

    <!-- rodapé-->
    <?php include_once "elements/footer.html"?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>