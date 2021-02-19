<?php

$erro = isset($_GET["erro"]) ? $_GET["erro"] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Twitter clone</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="blog_estilo.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script>
        $(document).ready(function() {


            $('#btn_login').click(function() {

                var campo_vazio = false;

                if ($('#campo_usuario').val() == "") {
                    $('#campo_usuario').css({
                        'border-color': '#A94442'
                    });
                    campo_vazio = true;
                } else {
                    $('#campo_usuario').css({
                        'border-color': '#CCC'
                    });
                }

                if ($('#campo_senha').val() == "") {
                    $('#campo_senha').css({
                        'border-color': '#A94442'
                    });
                    campo_vazio = true;
                } else {
                    $('#campo_senha').css({
                        'border-color': '#CCC'
                    });
                }

                if (campo_vazio) return false;


            });

        });
    </script>
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
                <li><a href="cadastrese.php"><b>Cadastre-se</b></a></li>';
            </ul>
        </div>
    </nav>

    <?php require_once("estilo_pagina/capa.php") ?>


    <div class="container area">
        <br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class=" <?= $erro == 1 ? 'open' : '' ?>">
                        <div class="col-md-12">
                            <h3>Você possui uma conta?</h3>
                            <br />
                            <form method="post" action="validar_acesso.php" id="formLogin">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                                </div>

                                <button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

                                <br /><br />

                            </form>

                            <?php
                            if ($erro == 1) {
                                echo "<font color='#FF0000'>usuario ou senha invalidos(s)</font>";
                            }
                            ?>
                            </form>

                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4"></div>

        <div class="clearfix"></div>
        <br /><br /><br /><br /><br /><br />
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>

    <?php require_once("estilo_pagina/rodape.php"); ?>