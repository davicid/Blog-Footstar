<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Blog Footstar</title>

    <!-- Bootstrap -->
    <link href="bootstrap/scss/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="blog_estilo.css">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

</head>


<body>
    <nav class="navbar navbar-default navbar-fixed-top" id="menu_navegacao">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" id="menu_nav">
                <span class="sr-only">Alternar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><b id="blog_logo">Blog Footstar</b></h1>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><b>Página Inicial</b></a></li>

                <?php if (isset($_SESSION["usuario"]) && (($_SESSION["tipo_usuario"] == "jornalista") || ($_SESSION["tipo_usuario"] == "administrador"))) {
                    echo '<li><a href="area_jornalistas.php"><b>Área de Jornalistas</b></a></li>';
                } ?>

                <?php if (!isset($_SESSION["usuario"])) {
                    echo '<li><a href="cadastrese.php"><b>Cadastre-se</b></a></li>
                        <li><a href="login.php"><b>Entrar</b></a></li>';
                } else {
                    echo '<li><a href="estilo_pagina/sair.php"><b>Sair</b></a></li>';
                } ?>
            </ul>
        </div>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>