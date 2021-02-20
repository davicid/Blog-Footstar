<?php

$erro_usuario = isset($_GET["erro_usuario"]) ? $_GET["erro_usuario"] : 0;
$erro_email = isset($_GET["erro_email"]) ? $_GET["erro_email"] : 0;
$usuario_cadastrado = isset($_GET["usuario_cadastrado"]) ? $_GET["usuario_cadastrado"] : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Blog Footstar</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="blog_estilo.css">

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
                <li><a href="login.php"><b>Entrar</b></a></li>';
            </ul>
        </div>
    </nav>

    <?php require_once("estilo_pagina/capa.php") ?>

    <section class="container area">

        <br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Cadastre-se já.</h3>
            <br />
            <form method="post" action="registrar_usuario.php">
                <div class="form-group">
                    <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder="Nome e Sobrenome" required="requiored">
                    <br />
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">

                    <?php

                    if ($erro_usuario) {
                        echo "<font style='color:#FF0000'>Usuário já existe</font>";
                    }

                    ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">

                    <?php

                    if ($erro_email) {
                        echo "<font style='color:#FF0000'>Email já existe</font>";
                    }

                    ?>

                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
                </div>
                <button type="submit" class="btn btn-primary form-control" id="cadastrese">Cadastre-se</button>

                <?php

                if ($usuario_cadastrado) {
                    echo "<font style='color:green'>Usuário cadastrado com sucesso!</font>";
                }

                ?>
            </form>

        </div>
        <div class="col-md-4"></div>

        <div class="clearfix"></div>
        <br /><br />
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </section>


    <?php require_once("estilo_pagina/rodape.php"); ?>